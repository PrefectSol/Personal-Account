<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::name('user.')->group(function(){
    Route::view('/account', 'account')->middleware('auth')->name('account');

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route('user.account'));
        }
        return view('login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'Login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

   Route::get('/registration', function(){
    if(Auth::check()){
        return redirect(route('user.account'));
    }
       return view('registration');
   })->name('registration');

   Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'Reg']);

   Route::get('/account', 'App\Http\Controllers\AccountController@AllDataForm')->name('account');

   Route::post('/account', 'App\Http\Controllers\AccountController@SaveChanges')->name('saveChanges');
});