<?php

namespace App\Http\Controllers;

use App\Models\backend\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(8)->get();
        return view('main_home',compact('products'));
    }
    public function shop()
    {
        $products = Product::where("type","sale")->where('status','active')->latest()->get();
       
        return view('frontend.shop',compact('products'));
    }
    public function designList()
    {
        $products = Product::where("type","booking")->where('status','active')->latest()->get();
        return view('frontend.design',compact("products"));
    }
    public function repairing()
    {
        return view('frontend.repairing');
    }

    public function bookingDesing($id)
    {
        $product=Product::findOrFail($id);
        return view('frontend.booking',compact('product'));
    }

    public function productDetails($id)
    {
        $product = Product::where('id',$id)->first();
         $categories=Category::latest()->get();
        return view('frontend.product_details',compact('product','categories'));
    }

    public function checkout($id)
    {
        $product = Product::where('id',$id)->first();
        return view('frontend.checkout',compact('product'));
    }

    public function contact(){
        return view("frontend.contact");
    }

    public function sendEmail(Request $req){
      $data = array('name'=>$req->name);
      Mail::send('mail', $data, function($message) use($req){
         $message->to(settings()->email, settings()->name)->subject($req->subject);
         $message->from($req->email,$req->name);
      });
    }
}
