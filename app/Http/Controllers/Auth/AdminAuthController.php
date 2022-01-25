<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function loginForm()
    {
        return view('adminAuth.login');
    }

    public function login(Request $request)
    {
       $request->validate(['email'=>'required','password'=>'required']);
        $cadential = $request->only('email','password');
        if (Auth::guard('admin')->attempt($cadential)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->with('login-error','Cadential are not match!');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login.get');
    }
}
