<?php

use App\Models\Settings;

function settings(){
    return Settings::firstOrFail();
}
