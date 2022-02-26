<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function Reg(Request $request){
        if(Auth::check()){
            return redirect(route('user.account'));
        }

        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'fullname' => 'required',
            'passportseries' =>'required',
            'passportnumber' => 'required',
            'whoisstringsuedthepassport' => 'required',
            'dateofissueofthepassport' => 'required'
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect(route('user.registration'));
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.account'));
        }

        return redirect(route('user.login'));
    }
}