<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\OtpCode;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;


use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'Userid' => 'nullable',
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'userid' =>$request->userID,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);


       

        event(new Registered($user));

        Auth::login($user);

        
        // otp generator
        $otpCode = rand(123456, 999999);

        // Store OTP code and user ID in the database
        // Assuming you have an 'otp_codes' table
        OtpCode::create([
            'user_id' => $user->id,
            'code' => $otpCode,
            'expires_at' => now()->addMinutes(15)
        ]);

        return redirect(RouteServiceProvider::HOME)->with('success', "Welcome $user->firstname just created Rolette account");
    }



  

// public function store(Request $request): RedirectResponse
// {
//     $validator = Validator::make($request->all(), [
//         'firstname' => ['required', 'string', 'max:255'],
//         'lastname' => ['required', 'string', 'max:255'],
//         'Userid' => 'nullable',
//         'address' => ['required', 'string', 'max:255'],
//         'phone' => ['required', 'string', 'max:255'],
//         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
//         'password' => ['required', 'confirmed', Rules\Password::defaults()],
//     ]);

//     if ($validator->fails()) {
//         return redirect()->back()->withErrors($validator)->withInput();
//     }

//     $user = User::create([
//         'firstname' => $request->firstname,
//         'lastname' => $request->lastname,
//         'userid' => $request->userID,
//         'email' => $request->email,
//         'address' => $request->address,
//         'phone' => $request->phone,
//         'password' => Hash::make($request->password),
//     ]);

    // Generate OTP code
    // $otpCode = Str::random(6); // Change the length as needed

    // $otpCode = rand(123456);

    // // Store OTP code and user ID in the database
    // // Assuming you have an 'otp_codes' table
    // OtpCode::create([
    //     'user_id' => $user->id,
    //     'code' => $otpCode,
    //     'expires_at' => now()->addMinutes(15)
    // ]);

//     // Send OTP via SMS using Twilio or another SMS service provider
//     // Replace 'your_twilio_phone_number' and 'your_twilio_sid' with actual values
//     // Also replace 'your_auth_token' with your Twilio authentication token


//     // $twilio = new TwilioClient('your_twilio_sid', 'your_auth_token');
//     // $twilio->messages->create(
//     //     $user->phone,
//     //     [
//     //         'from' => 'your_twilio_phone_number',
//     //         'body' => "Your OTP code: $otpCode",
//     //     ]
//     // );

//     // Redirect to a verification page where the user enters the OTP

//     // return redirect()->route('verification.page');
//     return redirect(RouteServiceProvider::HOME);
    
// }

}
