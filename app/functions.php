<?php

use App\Models\backend\Booking;
use App\Models\backend\Order;
use App\Models\backend\Service;
use App\Models\Product;
use App\Models\Settings;

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
