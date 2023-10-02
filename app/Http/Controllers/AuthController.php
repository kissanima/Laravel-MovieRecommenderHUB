<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function signin() {
        return view('signin');
    }

    public function auth_login(Request $request) {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->route('home');
        }
        else {
            return redirect()->back()->with('error', "Please enter correct email and password");
        }
    }


    public function signup() {
        return view('signup');
    }

    public function auth_signup(Request $request) {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();

        return redirect()->route('signin')->with('success', "Registration Success!");
    }

    public function auth_signout() {
        Auth::logout();
        return redirect('signin');
    }
}
