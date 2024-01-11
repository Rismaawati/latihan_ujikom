<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    //
     public function auth(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            if (Auth::user()->level == "admin") {
                return redirect('template');
            }else{
                return redirect('operator');
            }
        }
        return redirect()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
