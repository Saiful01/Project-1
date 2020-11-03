<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registration(){
        return view('registration.index');
    }
    public function registrationStore(Request $request){
       /* return $request->all();*/
        unset($request['_token']);
        $request['password'] = Hash::make($request['password']);

        try {

          $user=  User::create($request->all());
            auth()->login($user);
            return redirect()->intended('/user/dashboard');

        } catch (\Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }
    public function dashboard(){
        return view('index');
    }
}
