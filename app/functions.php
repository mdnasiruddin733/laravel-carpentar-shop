<?php

use App\Models\backend\Booking;
use App\Models\backend\Order;
use App\Models\backend\Service;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Support\Facades\Http;

function settings(){
    return Settings::firstOrFail();
}


function total_order(){
    echo Order::count();
}

function total_product(){
    echo Product::count();
}

function total_service(){
    echo Service::count();
}

function total_booking(){
    echo Booking::count();
}

function sslczPay($post_data){
        $direct_api_url="https://sandbox.sslcommerz.com/gwprocess/v4/api.php";

        $post_data['store_id'] = config("sslcz.store_id");
        $post_data['store_passwd'] = config("sslcz.store_passwd");
        $post_data['currency'] = config("sslcz.currency");  
        $post_data['success_url'] = url("/success");
        $post_data['fail_url'] = url("/fail");
        $post_data['cancel_url'] = url("/cancel");
        $post_data['ipn_url'] = url("/ipn");

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $direct_api_url );
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($handle, CURLOPT_POST, 1 );
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


        $content = curl_exec($handle );

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if($code == 200 && !( curl_errno($handle))) {
            curl_close( $handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close( $handle);
            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            exit;
        }

        # PARSE THE JSON RESPONSE
        $sslcz = json_decode($sslcommerzResponse, true );
        if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
                # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
                # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
            echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            # header("Location: ". $sslcz['GatewayPageURL']);
            exit;
        } else {
            echo "JSON Data parsing error!";
        }
        
    
}
