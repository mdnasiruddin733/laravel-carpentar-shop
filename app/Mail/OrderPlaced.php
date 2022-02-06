<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
class OrderPlaced extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $order;
    public function __construct($order)
    {
        $this->order=$order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $data=[
            "tran_id"=>$this->order->tran_id,
            "product_name"=>$this->order->product->name,
            "product_image"=>public_path()."/".$this->order->product->image,
            "id"=>$this->order->id,
            "name"=>$this->order->name,
            "phone"=>$this->order->phone,
            "email"=>$this->order->email,
            "address"=>$this->order->address,
            "sku"=>$this->order->product->created_at->format('dmyhis'),
            "amount"=>$this->order->product->price+settings()->delivery_charge
        ];
        $pdf = PDF::loadView('backend.orders.money_receipt',$data);
        return $this->markdown('mail.order-placed')->attachData($pdf->output(), "invoice.pdf");
    }
}
