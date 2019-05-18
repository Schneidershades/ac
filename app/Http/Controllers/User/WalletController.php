<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WalletTransaction;
use App\Models\WalletFund;

class WalletController extends Controller
{
    public function index()
    {
        return view('users.wallet_transaction')->with('transactions', auth()->user()->walletTransactions);
    }

    public function create()
    {
        return view('users.wallet_fund');
    }

    public function store(Request $request)
    {
        
        $initialPay = $request->amount;
        $charge = $request->amount * 0.02;
        $amountToPayFinally = $request->amount + $charge;
        $total = $amountToPayFinally * 100;


        $walletFund = new WalletFund;
        $walletFund->amount = $initialPay / 100;
        $walletFund->amount_total = $total / 100;
        $walletFund->service_charge = $charge;
        $walletFund->user_id = auth()->user()->id;
        $walletFund->save();

        $walletFunding = new WalletTransaction;
        $walletFunding->title = 'Wallet Fund';
        $walletFunding->identifier = $walletFund->identifier;
        $walletFunding->user_id = auth()->user()->id;
        $walletFunding->details = 'processing';
        $walletFunding->amount_paid = $initialPay;
        $walletFunding->amount = $initialPay;
        $walletFunding->category = 'Wallet TopUp';
        $walletFunding->remarks = 'pending';
        $walletFunding->transaction_type = 'Credit';
        $walletFunding->save();

        return redirect()->route('wallet.show', $walletFund->identifier);
    }
    
    public function show($id)
    {

        return view('users.wallet_transaction_show')
            ->with('transaction', WalletFund::where('identifier', $id)->first())
            ->with('wt', WalletTransaction::where('identifier', $id)->first());
    }

}
