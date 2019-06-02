<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPackage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $find_wallet =  Wallet::where('user_id', auth()->user()->id)->first();
        
        if ($find_wallet == null){
            // if he/her dosent have a wallet
            $wallet = new Wallet;
            $wallet->user_id = auth()->user()->id;
            $wallet->balance = 0;
            $wallet->save();
        }

        $eventPackages = EventPackage::all();
        return view('backend.home')
            ->with('eventPackages', $eventPackages);
    }


}
