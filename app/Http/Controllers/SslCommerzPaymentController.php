<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\backend\Order;
use Illuminate\Support\Facades\Auth;
class SslCommerzPaymentController extends Controller
{

    public function index(Request $req)
    {       
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
        

        
        
            $product=Product::findOrFail($req->product_id);

            $post_data = array();
            $post_data['total_amount'] = $product->price+settings()->delivery_charge;
            $post_data['multi_card_name'] = "bkash,dbblmobilebanking,qcash,upay,";

            # EMI INFO
            $post_data['tran_id'] = uniqid();


            # CUSTOMER INFORMATION
            $post_data['cus_name'] = $req->name;
            $post_data['cus_email'] =$req->email;
            $post_data['cus_add1'] = $req->address;
            $post_data['cus_add2'] = $req->address;
            $post_data['cus_city'] = $req->city;
            $post_data['cus_state'] =  $req->state;
            $post_data['cus_postcode'] =  $req->postcode;
            $post_data['cus_country'] =  $req->country;
            $post_data['cus_phone'] =  $req->phone;
            $post_data['cus_fax'] = "";

            # SHIPMENT INFORMATION
            $post_data["shipping_method"]="No";

        

            #Product Information
            $post_data["product_name"]=$product->name;
            $post_data["product_profile"]="goods";
            $post_data["product_category"]=$product->category;
            $post_data['product_amount'] = "1";
            
            $data=[
                "user_id"=>Auth::user()->id,
                "name"=>$req->name,
                "email"=>$req->email,
                "phone"=>$req->phone,
                "address"=>$req->address,
                "country"=>$req->country,
                "city"=>$req->city,
                "postcode"=>$req->postcode,
                "note"=>$req->note,
                "product_id"=>$req->product_id,
                "status"=>"Pending",
                "tran_id"=>$post_data["tran_id"],
                "amount"=>$post_data["total_amount"]
            ];
        if($req->create_account==1){
            if(!empty($req->password)){
                $user=User::create([
                    "name"=>$req->name,
                    "email"=>$req->email,
                    "password"=>bcrypt($req->password)
                ]);
            }
            
        }

        Order::create($data);
        return sslczPay($post_data);

            

      
    }

 
    public function success(Request $req)
    {

      $tran_id=$req->tran_id;
      $bank_tran_id=$req->bank_tran_id;
      $order=Order::where("tran_id",$tran_id)->first();
      $order->bank_tran_id=$bank_tran_id;
      $order->status="Completed";
      $order->save();
      $toemail=$order->email;
        // $data = [
        //     "name"=>$order->name,
        //     "tran_id"=>$tran_id,
        //     "product_name"=>$order->product->name,
        //     "amount"=>$order->amount
        // ];
        // Mail::send('frontend.invoice-mail', $data, function($message) use($toemail,$data){
        //     $message->to($toemail, $data["name"])->subject("Your order is placed");
        //     $message->from(settings()->email,settings()->name);
        // });
      Mail::to($toemail)->send(new OrderPlaced($order));
      return redirect(url("/login"))->with(["type"=>"success","message"=>"Your order is placed successfully"]);

    }

    public function fail(Request $req)
    {
       $tran_id=$req->tran_id;
       $order=Order::where("tran_id",$tran_id)->first();
       $order->delete();
       return redirect(url("/"))->with(["type"=>"error","message"=>"Your order is failed"]);
    }

    public function cancel(Request $req)
    {
       $tran_id=$req->tran_id;
       $order=Order::where("tran_id",$tran_id)->first();
       $order->delete();
       return redirect(url("/"))->with(["type"=>"error","message"=>"Your order is cancelled"]);


    }

    public function ipn(Request $request)
    {
        echo "This is IPN";
    }

   

}
