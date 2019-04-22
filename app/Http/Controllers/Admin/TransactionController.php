<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WalletTransaction;
use App\Models\Wallet;

use App\Models\Products\AirtimeTransaction;
use App\Models\Products\DataTransaction;
use App\Models\Products\DigitalTvTransaction;
use App\Models\Products\PowerTransaction;
use App\Models\SmsTextTransaction;
use App\Models\Products\AgricLoan;

class TransactionController extends Controller
{
    public function transactions()
    {
        $wallet = WalletTransaction::orderBy('id', 'desc')->get();

        return view('admin.activities.transaction.wallet.index')
            ->with('history', $wallet);
    }

        public function showWalletTransaction($identifier){
        $transaction = WalletTransaction::where('identifier', $identifier)->first();
        return view('admin.activities.transaction.wallet.show')->with('transaction', $transaction);
    } 


    public function actionTransactionUpdate(Request $request, $identifier)
    {        
        $checkTransactionToRefund = AirtimeTransaction::where('identifier', $identifier)->first();

        if($checkTransactionToRefund === null){
            $checkTransactionToRefund = PowerTransaction::where('identifier', $identifier)->first();
        }

        if($checkTransactionToRefund === null){
            $checkTransactionToRefund = DataTransaction::where('identifier', $identifier)->first();
        }

        if($checkTransactionToRefund === null){
            $checkTransactionToRefund = DigitalTvTransaction::where('identifier', $identifier)->first();
        }

        if($checkTransactionToRefund === null){
            $checkTransactionToRefund = SmsTextTransaction::where('identifier', $identifier)->first();
        }

        $refundWallet = WalletTransaction::where('identifier', $identifier)->first();


        if($refundWallet === null){
            return redirect()->back()->with('error', 'Unable to process Transaction. Transaction not found on user wallet transaction');
        }

        

        if($request->status == 'Refund'){
        
            if($refundWallet->amount_paid >= 1000){
                $checkReward = WalletTransaction::where('identifier', $identifier)->where('category', 'SP Reward')->first();

                if($checkReward != null){
                    $find_user = Wallet::where('user_id', $checkReward->user_id)->first();
                    // deduct wallet
                    $find_user->pv_balance -=  $checkReward->amount;        

                    $find_user->save();

                    $checkReward->delete();
                }

            }

            if($checkTransactionToRefund->status == 'Failed' ){
                return redirect()->back()->with('error', 'Unable to make transaction. User was not debited when the transaction failed');
            }

            if($checkTransactionToRefund->status == 'Refund' || $checkTransactionToRefund->status == 'Refunded' || $refundWallet->remarks == 'Refunded'){
                return redirect()->back()->with('error', 'Transaction Already Refunded');
            }

            // if($checkTransactionToRefund->status == 'Fulfilled' || $checkTransactionToRefund->status == 'Success' || $checkTransactionToRefund->status == 'Successful'){
            //     return redirect()->back()->with('error', 'Cannot Refund Wallet Transaction was successful');
            // }

            $checkTransactionToRefund->status = 'Refund';

            $checkTransactionToRefund->save();

            $find_wallet = Wallet::where('user_id', $refundWallet->user_id)->first();

            // deduct wallet
            $find_wallet->balance +=  $refundWallet->amount_paid;        

            $find_wallet->save();


            $refundWallet->title = 'Refund : ' . $request->title;
            $refundWallet->remarks = 'Refunded';
            $refundWallet->details = 'Refunded : ' .$refundWallet->details. ' : '.$request->remarks;
            $refundWallet->transaction_type = 'Credit';
            $refundWallet->balance = $find_wallet->skill_coin_balance;
        }

        

        $refundWallet->save();

        return redirect()->back()->with('success', 'User Transaction Refund was Successful');
    }
}
