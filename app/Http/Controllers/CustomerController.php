<?php

namespace App\Http\Controllers;

use App\Models\backend\Order;
use App\Models\User;
use App\Models\UserDetails;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Auth;
use App\Rules\CurrentPasswordNotMatched;
class CustomerController extends Controller
{
    public function showProfile(){
        return view("customer.profile");
    }

    public function updateProfile(Request $req){
        $this->validate($req,[
            "name"=>"required",
            "email"=>"required|email"
        ]);
        $user=User::find(Auth::user()->id);
        $user->name=$req->name;
        $user->email=$req->email;
        $user->save();
        return back()->with(
            [
                "type"=>"success",
                "message"=>"Your profile updated successfully"
            ]
            );
    }


    public function showProfileDetails(){
        return view("customer.user-details");
    }

     public function updateProfileDetails(Request $req){
         $this->validate($req,[
            "country"=>"required",
            "city"=>"required",
            "postcode"=>"required",
            "phone"=>"required",
            "address"=>"required"
         ]);
         $userDetails=UserDetails::where("user_id",Auth::user()->id)->first();
         $userDetails->country=$req->country;
         $userDetails->city=$req->city;
         $userDetails->address=$req->address;
         $userDetails->postcode=$req->postcode;
         $userDetails->phone=$req->phone;
         $userDetails->save();

         return back()->with(
            [
                "type"=>"success",
                "message"=>"Your profile information updated successfully"
            ]
            );
     }

     public function showMyOrders(){
         $orders=Order::where("user_id",Auth::user()->id)->latest()->get();
         return view("customer.my-orders",compact("orders"));
     }


     public function changePassword(){
         return view("customer.change-password");
     }

     public function resetPassword(Request $req){
        $this->validate($req,[
            "current_password"=>new CurrentPasswordNotMatched(),
            "password"=>"required|confirmed|min:6"
        ]);
        $admin=User::find(Auth::guard('web')->user()->id);
        $admin->password=bcrypt($req->password);
        $admin->save();
        return redirect(route("customer.profile"))->with([
            "type"=>"success",
            "message"=>"Password reset successfully"
        ]);

    }
}
