<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\backend\Booking;
use App\Models\backend\Order;

class BookingController extends Controller
{
   public function create(Request $req){

        $this->validate($req,
            [
                "name"=>"required",
                "email"=>"required|email",
                "phone"=>"required",
                "address"=>"required",
                "country"=>"required",
                "city"=>"required",
                "postcode"=>"required",
                "note"=>"nullable",
                "product_id"=>"required|exists:products,id",
               

            ]
        );
        $data=[
            "name"=>$req->name,
            "email"=>$req->email,
            "phone"=>$req->phone,
            "address"=>$req->address,
            "country"=>$req->country,
            "city"=>$req->city,
            "postcode"=>$req->postcode,
            "note"=>$req->note,
            "product_id"=>$req->product_id,
            "status"=>"active"
        ];
        $message1="";
        if($req->order_type==="booking"){
            Booking::create($data);
            $message1="Your booking is placed ";
        }else if($req->order_type==="order"){
            Order::create($data);
            $message1="Your order is placed ";
        }
        
        if($req->create_account==1){
            if(!empty($req->password)){
                User::create([
                    "name"=>$req->name,
                    "email"=>$req->email,
                    "password"=>bcrypt($req->password)
                ]);
                
            }
            return back()->with([
                "type"=>"success",
                "message"=>$message1."and your account is created successfully"
            ]);
        }

         return back()->with([
                "type"=>"success",
                "message"=>$message1
            ]);
        
   }
}
