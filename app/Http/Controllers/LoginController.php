<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
    {

        return view('login.index');
    }

    public function loginCheck(Request $request)
    {

        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {

            return redirect()->intended('/user/dashboard');
        }

        return Redirect::to('/user/login')
            ->with('failed','Email or password is wrong.')
            ->withInput();

    }

    public function doLogout()
    {
        Auth::logout(); // log the user out of our application
        return Redirect::to('/');
    }
}
