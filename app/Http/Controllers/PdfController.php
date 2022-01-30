<?php
namespace App\Http\Controllers;

use App\Models\backend\Order;
use Illuminate\Http\Request;
use PDF;
class PdfController extends Controller

{

    public function download($id){
        $order=Order::findOrFail($id);
        $pdf = PDF::loadView('backend.orders.money_receipt',$order->toArray());
        return $pdf->download("money_receipt.".time().".pdf");

    }

}  
