<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $orders=Order::oldest()->get();
        return  view('backend.orders.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\backend\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view("backend.orders.show",compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\backend\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        
        if($order->status=="pending"){
            $order->status="delivered";
            $message="Order is made delivered";
        }else{
             $order->status="pending";
             $message="Order is made pending";
        }
        
        $order->save();
        return back()->with([
            "type"=>"warning",
            "message"=>$message
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\backend\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\backend\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    public function delete($id)
    {
        Order::findOrFail($id)->delete();
        return back()->with([
            "type"=>"success",
            "message"=>"Order cancelled"
        ]);
    }
}
