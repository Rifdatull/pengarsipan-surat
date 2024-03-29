<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use session;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/beranda');
        }
        return redirect('/login')->with('error','Email atau Password anda Salah !!');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }

}
