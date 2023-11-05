<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\VerificationCode;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class AuthOtpController extends Controller
{
    //return view of OTP login
    public function login(){

    }


    // Generate OTP
    public function generate(Request $request){
        $request->validate([ 

            'phone' => 'required|exist:users,phone'

        ]);

        // Generate OTP
    }

    public function generateOtp($phone){

        $user = User::where('phone', $phone)->first();

        // User does not have any Exixting OTP
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();

        $now = Carbon::now();

        if($verificationCode && $now->isBefore($verificationCode->expire_at)){
            return $verificationCode;
        }

        return VerificationCode::create([

            'user_id' => $user->id,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)

        ]);

    }
    
}
