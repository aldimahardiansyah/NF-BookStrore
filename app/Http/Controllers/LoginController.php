<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function daftar () {
        return view('login.member', ["title" => "Daftar Member"]);
    }

    function store(Request $request){
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        $input['password'] = Hash::make($input['password']);

        $store = User::create($input);
        if($store){
            return redirect('/login')->with('jsAlert', 'Daftar berhasil, silakan login!');
        } else{
            return redirect('/login')->with('jsAlert', 'Daftar gagal, silakan hubungi CS!');
        }

    }

    function login(){
        return view('login.login', ["title" => "Login"]);
    }

    function authenticate(Request $request){
        $input = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($input)){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('jsAlert', 'Login gagal!');
    }

    function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');

    }
}
