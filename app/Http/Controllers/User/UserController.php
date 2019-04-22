<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreated;

class UserController extends Controller
{
    public function sendToken()
    {
        return view('auth.passwords.activate');
    }

    public function resend(Request $request)
    {
        $user =  User::where('email', $request->email)->first();

        if ($user ===  null){
            return redirect()->back()->with('error', 'Email address not found');
        }else{

            if($user->verified == true){
                return redirect()->back()->with('error', 'Account is already activated!! you can login');
            }else{
                $user->verification_token = User::generateVerificationCode();
                $user->save();

                Mail::to($user)->send(new UserCreated($user));

                return redirect()->back()->with('success', 'The verification email has been sent');
            }
        }
    }
}
