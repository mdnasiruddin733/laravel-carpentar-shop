<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->limit(8)->get();
        return view('main_home',compact('products'));
    }
    public function shop()
    {
        $products = Product::latest()->get();
        return view('frontend.shop',compact('products'));
    }
    public function designList()
    {
        return view('frontend.design');
    }
    public function repairing()
    {
        return view('frontend.repairing');
    }

    public function bookingDesing($slug)
    {
        return view('frontend.booking',compact('slug'));
    }

    public function productDetails($id)
    {
        $product = Product::where('id',$id)->first();
        return view('frontend.product_details',compact('product'));
    }

    public function checkout($id)
    {
        $product = Product::where('id',$id)->first();
        return view('frontend.checkout',compact('product'));
    }
}
