<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Referral;
use App\Models\Wallet;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            // 'referral' => ['required', 'string', 'email', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data )
    {
        $referral_user = User::where('email', $data['referral'])->orWhere('username', '=', $data['referral'])->first();
        
        if ($referral_user === null) {
            $referralID = 1;
        }else{
            $referralID = $referral_user->id;
        }

        // if($data['email'] && $referral_user != null){
        //     if ($referral_user->email == $data['email']){
        //        return redirect()->back()->with('error', 'you cannot be the referral at the moment. Please find a valid referral ID');
        //     }
        // }

        // store in the referals table
        
        $save_user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'username' => str_slug($data['name']),
            'package_id' => '1',
        ]);

        $referral = new Referral;
        $referral->user_id = $save_user->id;
        $referral->referral_id = $referralID;
        $referral->save();

        

        // create a wallet for the registering user
        $find_wallet =  Wallet::where('user_id', $save_user->id)->first();
        
        if ($find_wallet == null){
            // if he/her dosent have a wallet
            $wallet = new Wallet;
            $wallet->user_id = $save_user->id;
            $wallet->balance = 0;
            $wallet->save();
        }

        return $save_user;
    }
}
