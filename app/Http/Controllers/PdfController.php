<?php
namespace App\Http\Controllers;

use App\Models\backend\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller

{

    public function download($id){
        $order=Order::findOrFail($id);
        $data=[
            "tran_id"=>$order->tran_id,
            "product_name"=>$order->product->name,
            "product_image"=>public_path()."/".$order->product->image,
            "id"=>$order->id,
            "name"=>$order->name,
            "phone"=>$order->phone,
            "email"=>$order->email,
            "address"=>$order->address,
            "sku"=>$order->product->created_at->format('dmyhis'),
            "amount"=>$order->product->price+settings()->delivery_charge
        ];
        $pdf = PDF::loadView('backend.orders.money_receipt',$data);
        return $pdf->download("money_receipt.".time().".pdf");
        

    }

}  
