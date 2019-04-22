<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Referral;
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
            'referral' => ['required', 'string', 'email', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referral_user = User::where('email', $data['referral'])->first();
        
        if ($referral_user === null) {
            return redirect()->back()->with('error', 'Invalid Referral Credential. Please find a valid referral ID');
        }

        if($data['email'] && $referral_user != null){
            if ($referral_user->email == $data['email']){
               return redirect()->back()->with('error', 'you cannot be the referral at the moment. Please find a valid referral ID');
            }
        }

        // store in the referals table
        $referral = new Referral;
        $referral->user_id = $user->id;
        $referral->referral_id = $referral_user->id;
        $referral->save();

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
