<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


    public function showRegistrationForm()
    {
        if (Auth()->check()) {
            return redirect()->route('user.dashbboard');
        }

        return view('user.auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'password_confirmation' => 'required',
            'name' => 'required',
        ]);
        try {
            User::create([
                'email' => $request->email,
                'password' =>  $request->password,
                'name' => $request->name,
            ]);
            return redirect()->route('user.login')->with('success', 'Registration Successfull');
        } catch (\Throwable $th) {
           return redirect()->back()->with('error', 'Email already taken');      
         }

        
        

    }
}

