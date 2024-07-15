<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{


    public function showLoginForm()
    {
        if (Auth()->check()) {
            return redirect()->route('user.dashboard');
        }

        return view('user.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
            );
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.dashboard');
        }
        $notify[] = ['error','Invalid Login Credentials'];
        return back()->withNotify($notify);
    }

    public function logout(Request $request) {
        Auth()->logout();
        return redirect()->route('user.login');
    }
}
