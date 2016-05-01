<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;


class LoginController extends Controller
{
    //Show Login Form
    public function showLoginForm(){
        
        return view('loginform');
    
    }
    
    public function processLogin(LoginRequest $request){
    
        $credential = $request->only('username', 'password');
        
        if(\Auth::attempt($credential)){
//        return Redirect::back()->with('message','Welcome, '.Auth::user()->username.'!');
            return redirect('posts/all');
            
        } else {
            
            return redirect('login')->with('message', 'Login information invalid');
        
        }
    
    }
    
    
    public function logout(){
        
        //log you out
        \Auth::logout();
        
        //redirect to login page
        return redirect('login');
    
    }

    
}
