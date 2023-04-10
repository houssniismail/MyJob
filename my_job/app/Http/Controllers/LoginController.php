<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);
        $authuser = $request->only('email','password');
        if(Auth::attempt($authuser)){
            return redirect()->intended('dashboard')
                             ->with('message','signed in!');
        }
        
        return redirect('login')->with('message','Login details are not valid!');
    }
    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('/login');
    }
}
