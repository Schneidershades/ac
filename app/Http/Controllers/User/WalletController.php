<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WalletTransaction;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.wallet_transaction')->with('transactions', auth()->user()->walletTransactions);
    }

    public function create()
    {
        return view('users.wallet_fund');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('users.wallet_transaction_show')->with('transactions', WalletTransaction::where('identifier', $id)->first());
    }

}
