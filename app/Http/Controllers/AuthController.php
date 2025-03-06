<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Masukkan Email',
            'password.required' => 'Masukkan Password',
        ]);
        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            return view('admin.blank.index');
        } else {
            return redirect('')->withErrors('Username Dan Password Tidak Sesuai')->withInput(); 
        }
    }
}
