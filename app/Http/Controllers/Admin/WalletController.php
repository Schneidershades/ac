<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WalletTransaction;
use App\Models\User;
use App\Models\Wallet;
use Session;

class WalletController extends Controller 
{
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.userWalletTop')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reciever = User::where('id', $id)->first();
        $amountToCredit = $request->amount;
        $pvAmountToCredit = $request->sp_amount;

        if ($reciever === null) {
           Session::flash('error', 'Receiving user does not match users record');
           return redirect()->back();
        }
        

        // find wallet of who user is sending to
        $credit_coin = Wallet::where('user_id', $reciever->id)->first();
        
        // credit not
        $credit_coin->skill_coin_balance = $amountToCredit;
        $credit_coin->pv_balance = $pvAmountToCredit;

        // save all
        $credit_coin->save();
        
        return redirect()->route('admin.users.index')->with('success', 'Your credit transaction was successful');
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
