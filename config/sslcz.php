<?php

return [
    "store_id"=>env("STORE_ID"),
    "store_passwd"=>env("STORE_PASSWORD"),
    "connect_from_localhost"=>true,
    "currency"=>"BDT",
    "success_url"=>"/success",
    "fail_url"=>"/fail",
    "cancel_url"=>"/cancel",
    "ipn_url"=>"/ipn",
];
