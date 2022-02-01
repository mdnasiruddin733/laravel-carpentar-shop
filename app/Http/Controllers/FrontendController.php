<?php

namespace App\Http\Controllers;

use App\Models\backend\Category;
use App\Models\Faq;
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

    $this->validate($req,[
        "name"=>"required",
        "email"=>"required|email",
        "message"=>"required|string|max:2000",
        "subject"=>"required|string|max:100"
    ]);
      $data = [
          "name"=>$req->name,
          "body"=>$req->message
      ];
      Mail::send('frontend.mail', $data, function($message) use($req){
         $message->to(settings()->email, settings()->name)->subject($req->subject);
         $message->from($req->email,$req->name);
      });
      return back()->with([
          "type"=>"success",
          "message"=>"Your mail is sent successfully"
      ]);
    }

    public function search(Request $req){
        $products=Product::where("name","like","%".$req->term."%")
        ->orWhere("type","like","%".$req->term."%")
        ->orWhere("status","like","%".$req->term."%")
        ->orWhere("color","like","%".$req->term."%")
        ->orWhere("width","like","%".$req->term."%")
        ->orWhere("height","like","%".$req->term."%")
        ->orWhere("description","like","%".$req->term."%")
        ->orWhere("short_description","like","%".$req->term."%")
        ->get();
        return view("frontend.search",compact('products'));
    }

    public function viewDetails($id){
        return redirect("product-details/".$id);
    }

    public function showFaq(){
        $faqs=Faq::latest()->get();
        return view("frontend.faq",compact('faqs'));
    }
}
