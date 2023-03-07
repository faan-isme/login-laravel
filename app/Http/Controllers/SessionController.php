<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index(){
        return view("session/login");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->input('email'));
        $request->validate(
            [
                'email'=>'required',
                'password' => 'required'
            ],
            [
                'email.required'=>'Email Wajib diisi',
                'password.required'=>'Password Wajib diisi',
            ]);
        $infoLogin = [
            'email' => $request ->email,
            'password' => $request ->password
        ];
        if (Auth::attempt($infoLogin)) {
            return redirect("/home");
        }else {
            return back()->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
        
    }
}
