<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use App\Models\UserPackage;
use App\Models\PackageTransaction;
use App\Models\ReferralBonus;
use App\Models\Referral;
use App\Models\WalletTransaction;
use App\Models\Wallet;
use Auth;
use Session;

class BuyPackageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PackageTransaction $transaction)
    {
        return view('users.package_purchase')
            ->with('transaction', $transaction)
            ->with('packages', Package::where('name', '!=', 'DREAM')->where('id', '!=', auth()->user()->package_id)->get());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PackageTransaction $transaction)
    {
        $userLoggedIn = UserPackage::where('user_id', Auth::id())->first();

        $fetchReferralBonus = ReferralBonus::find(1);

        if($userLoggedIn === NULL){
            Session::flash('error', 'Unauthorized for this package');
            return redirect()->back();
        }

        $picked_package = NULL;
        // find the user wallet
        $picked_package = Package::where('id', '=' ,$request->package_id)->first();

        

        if($picked_package === NULL){
            Session::flash('error', 'Package unavailable at the moment. Please Try again later');
            return redirect()->back();
        }

        // find the user wallet
        $debit_coin = Wallet::where('user_id', '=' ,Auth()->user()->id)->first();

        // check if user has money
        if($debit_coin->balance < $picked_package->amount){
            Session::flash('error', 'Insufficent Funds to migrate package. please top your wallet.');
            return redirect()->back();
        }else{
            $percentage_deduction = $picked_package->percentage;
            // $bonus = str_replace('%', '', $percentage_deduction) / 100;

            $bonus = $percentage_deduction / 100;

            // deduct what you are sending
            $acutalAmountToDeduct = $picked_package->amount * $bonus;

            // subtract deducted amount  amount from the initial amount for the package
            $amount_paid  =  $picked_package->amount - $acutalAmountToDeduct;

            $debit_coin->balance -= $amount_paid;

            $debit_coin->save();
        }
        // store in wallet transaction receipt that the person is credited

        $transaction->details = 'Package for '.$picked_package->name;
        $transaction->user_id = Auth()->user()->id;
        $transaction->purchase_for = Auth()->user()->id;
        $transaction->package_id = $request->package_id;
        $transaction->amount = $picked_package->amount;
        $transaction->category = $picked_package->name;
        $transaction->status = 'fulfilled';
        $transaction->finished = true;

        $walletTransactionDebit = new WalletTransaction;
        $walletTransactionDebit->title = 'Package Purchase';
        $walletTransactionDebit->identifier = $transaction->identifier;
        $walletTransactionDebit->user_id = Auth()->user()->id;
        $walletTransactionDebit->details = 'Package Purchase '  . $picked_package->name;
        $walletTransactionDebit->amount = $picked_package->amount;
        $walletTransactionDebit->amount_paid = $amount_paid;
        $walletTransactionDebit->category = 'Debit';
        $walletTransactionDebit->remarks = 'success';
        $walletTransactionDebit->transaction_type = 'Package Upgrade';
        $walletTransactionDebit->balance =$debit_coin->balance;

        $walletTransactionDebit->save();
        $transaction->save();

        // $this->maintainances($picked_package->amount, 334);
    
        Session::flash('success', 'Your package purchase was successful');
        return redirect()->route('package.show', $transaction->identifier);
    }
      
    
    
    public function maintainances($amount, $user_id)
    {
        $deposit = $amount * 0.1;

        // recharge type is for checking whether its airtime data tv or power
        $find_wallet  = Wallet::where('user_id', $user_id)->first();

        $find_wallet->balance += $deposit;

        $find_wallet->save();

        $walletReport = new WalletTransaction;

        $walletReport->title = 'Transfer Sent';
        $walletReport->identifier = 'trf'.uniqid(true);
        $walletReport->user_id = Auth::id();
        $walletReport->details = 'Money Transfer to ' .$find_wallet->user->email. ' purpose: maintainances';
        $walletReport->amount = $deposit;
        $walletReport->amount_paid = $deposit;
        $walletReport->category = 'Transfer';
        $walletReport->remarks = 'Successful';
        $walletReport->transaction_type = 'Credit';
        $walletReport->balance = $find_wallet->balance;

        $walletReport->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($transaction)
    {
        $transactions = WalletTransaction::where('identifier', $transaction)->get();
        return view('users.wallet_transaction_show')
            ->with('transactions', $transactions);
    }

}
