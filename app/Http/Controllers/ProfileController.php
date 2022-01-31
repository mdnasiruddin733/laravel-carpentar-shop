<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Rules\CurrentPasswordNotMatched;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view("backend.profile.index");
    }

    public function store(Request $req){
        $this->validate($req,[
            "name"=>"required",
            "username"=>"required",
            "email"=>"required|email"
        ]);
        $admin=Admin::findOrFail(auth()->guard('admin')->user()->id);
        $admin->name=$req->name;
        $admin->username=$req->username;
        $admin->email=$req->email;
        $admin->save();
        return back()->with([
            "type"=>"success",
            "message"=>"Profile updated successfully"
        ]);
    }

    public function changePassword(){
        return view("backend.profile.change-password");
    }

    public function resetPassword(Request $req){
        $this->validate($req,[
            "current_password"=>new CurrentPasswordNotMatched(),
            "password"=>"required|confirmed|min:6"
        ]);
        $admin=Admin::find(Auth::guard('admin')->user()->id);
        $admin->password=bcrypt($req->password);
        $admin->save();
        return redirect(route("admin.dashboard"))->with([
            "type"=>"success",
            "message"=>"Password reset successfully"
        ]);

    }
}
