<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function Login(Request $request){
        if(Auth::check()){
            return redirect()->intended(route('user.account'));
        }

        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.account'));
        }

        return redirect(route('user.login'));
    }
}
