<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function showlogin(){
        return view("auth.login");
    }
    public function login(Request $request){
        $credenciales=["email"=>$request->email,"password"=>$request->password];
        if(Auth::attempt($credenciales)){
            $request->session()->regenerate();
            return redirect()->intended("/home");
        }
        return redirect()->back()->withErrors(["error"=>"credenciales no coinciden"]);
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/login");
    }
}
