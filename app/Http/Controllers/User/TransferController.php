<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transfer;
use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletTransaction;
use Session;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('users.transfers.index')
            ->with('transfers', Transfer::where('finished', true));
    }

    
    public function create(Transfer $transfer)
    {
        return view('users.transfers.create')
            ->with('transfer', $transfer);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Transfer $transfer)
    {
        $receiver = User::where('email', $request->email)->first();
        
        if ($receiver === null) {
           Session::flash('error', 'Receiving user does not match users record');
           return redirect()->back();
        }else{

            // check if user wants to send to himself
            if ($receiver->id == Auth()->user()->id){

                Session::flash('error', 'You are now on our violations activity log!! dont try to make such transaction again. Thank you');
                return redirect()->back();
            }
            // find the user wallet
            $debit_coin = Wallet::where('user_id', '=' ,Auth()->user()->id)->first();
            
            // add charges for transfers

            $transferCharge = 0.02 * $request->amount;
            
            $transferChargeOnPercentage =  $request->amount + $transferCharge;

            $totalAmount = $request->amount + $transferCharge;

            // check if user has money
            if($debit_coin->skill_coin_balance < $totalAmount){
                Session::flash('error', 'Insufficent Funds');
                return redirect()->back();
            }else{
                // deduct what you are sending
                $debit_coin->skill_coin_balance -= $request->amount;
            }

            // find wallet of who user is sending to
            $credit_coin = Wallet::where('user_id', $receiver->id)->first();
            
            

            // credit not
            $credit_coin->skill_coin_balance += $request->amount;
            
            

            // save all
            $debit_coin->save();
            $credit_coin->save();

            $transfer->reciever_id = $receiver->id;
            $transfer->sender_id = Auth()->user()->id;
            $transfer->amount = $request->amount;
            $transfer->purpose = $request->purpose;
            $transfer->status = 'fulfilled';
            $transfer->charge = 'Yes';
            $transfer->charge_amount = $transferCharge;
            $transfer->finished = true;
            $transfer->save();

            $walletTransactionDebit = new WalletTransaction;
            $walletTransactionDebit->title = 'Transfer Sent';
            $walletTransactionDebit->identifier = $transfer->identifier;
            $walletTransactionDebit->user_id = Auth()->user()->id;
            $walletTransactionDebit->details = 'Money Transfer to '  . $request->email .'  purpose: '. $request->purpose;
            $walletTransactionDebit->amount = $request->amount;
            $walletTransactionDebit->amount_paid = $request->amount;
            $walletTransactionDebit->category = 'Transfer';
            $walletTransactionDebit->remarks = 'success';
            $walletTransactionDebit->transaction_type = 'Debit';
            $walletTransactionDebit->balance = $debit_coin->skill_coin_balance;
            
            $walletTransactionDebit->save();

            $walletTransactionCredit = new WalletTransaction;
            $walletTransactionCredit->title = 'Transfer Recieved';
            $walletTransactionCredit->identifier = $transfer->identifier;
            $walletTransactionCredit->user_id = $receiver->id;
            $walletTransactionCredit->details = 'Recieving Transfer From '  . Auth()->user()->email.' purpose: '. $request->purpose;
            $walletTransactionCredit->amount = $request->amount;
            $walletTransactionCredit->amount_paid = $request->amount;
            $walletTransactionCredit->category = 'Transfer';
            $walletTransactionCredit->remarks = 'success';
            $walletTransactionCredit->transaction_type = 'Credit';
            $walletTransactionCredit->balance =  $credit_coin->skill_coin_balance;
            $walletTransactionCredit->save();
            
            
            
            // find and deduct the user again  for the charges
            $findUserToCharge = Wallet::where('user_id', Auth()->user()->id)->first();

            $findUserToCharge->skill_coin_balance -= $transferCharge;

            $findUserToCharge->save();

            $walletTransactionDebitCharges = new WalletTransaction;
            $walletTransactionDebitCharges->title = 'Transfer Service Charge';
            $walletTransactionDebitCharges->identifier = $transfer->identifier;
            $walletTransactionDebitCharges->user_id = Auth()->user()->id;
            $walletTransactionDebitCharges->details = $request->amount . 'SKC Transfer to '  . $request->email .'  purpose: '. $request->purpose;
            $walletTransactionDebitCharges->amount = $transferCharge;
            $walletTransactionDebitCharges->amount_paid = $transferCharge;
            $walletTransactionDebitCharges->category = 'Charges';
            $walletTransactionDebitCharges->remarks = 'success';
            $walletTransactionDebitCharges->transaction_type = 'Debit';
            $walletTransactionDebitCharges->balance = $findUserToCharge->skill_coin_balance;

            $walletTransactionDebitCharges->save();
            
        }

        Session::flash('success', 'Your transfer transaction was successful');
        return redirect()->route('account.transfers.show', $transfer->identifier);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($transfer)
    {
        $transfer = Transfer::where('identifier', $transfer)->first();

        return view('users.transfers.show')
            ->with('transfer', $transfer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
