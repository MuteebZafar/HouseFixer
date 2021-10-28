<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\loginmodel;

class logincontroller extends Controller
{
    public function authenticationlogin(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
             
             ]);

        
        
        return view('home');
    }
    public function data(){
        return loginmodel::all();

    }
    public function authenticate(Request $request)
    {
       
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('home');
        }else return redirect()->intended('login');
    }
   
    }
