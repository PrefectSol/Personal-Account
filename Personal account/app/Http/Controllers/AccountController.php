<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function AllDataForm(){
        if (! Auth::check()) {
            return redirect(route('user.login'));
        }

        $userId = Auth::user()->id;
        $contact = User::all();

        return view('account', ['dataUser' => $contact->find($userId)]);
    }

    public function SaveChanges(){
        if (! Auth::check()) {
            return redirect(route('user.login'));
        }
        $userId = Auth::user()->id;

        $gender = htmlspecialchars ($_POST["gender"]);
        $country = htmlspecialchars ($_POST["country"]);
        $email = htmlspecialchars ($_POST["email"]);
        $passportseries = htmlspecialchars ($_POST["passportseries"]);
        $passportnumber = htmlspecialchars ($_POST["passportnumber"]);
        $fullname = htmlspecialchars ($_POST["fullname"]);
        $whoisstringsuedthepassport = htmlspecialchars ($_POST["whoisstringsuedthepassport"]);
        $dateofissueofthepassport = htmlspecialchars ($_POST["dateofissueofthepassport"]);
        $password = Hash::make(htmlspecialchars ($_POST["password"]));

        DB::table('users')->where('id', '=', $userId)->update(['gender' => $gender]);
        DB::table('users')->where('id', '=', $userId)->update(['country' => $country]);
        DB::table('users')->where('id', '=', $userId)->update(['email' => $email]);
        DB::table('users')->where('id', '=', $userId)->update(['passportseries' => $passportseries]);
        DB::table('users')->where('id', '=', $userId)->update(['passportnumber' => $passportnumber]);
        DB::table('users')->where('id', '=', $userId)->update(['fullname' => $fullname]);
        DB::table('users')->where('id', '=', $whoisstringsuedthepassport)->update(['country' => $whoisstringsuedthepassport]);
        DB::table('users')->where('id', '=', $userId)->update(['dateofissueofthepassport' => $dateofissueofthepassport]);
        DB::table('users')->where('id', '=', $userId)->update(['password' => $password]);

        return redirect(route('user.account'));
    }
}