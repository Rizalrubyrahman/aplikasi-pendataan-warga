<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function cekLogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password')))
        {
            return redirect('/');
        }
        return redirect('/login');
    }
}
