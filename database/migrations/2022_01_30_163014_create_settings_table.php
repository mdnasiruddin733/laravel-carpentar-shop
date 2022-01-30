<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->default("CAMS");
            $table->string("logo")->default("assets/img/logo.jpg");
            $table->string("favicon")->default("assets/img/logo.jpg");
            $table->string("email")->default("contact@cams.com");
            $table->string("phone")->default("013xxxxxxxx");
            $table->string("address")->default("Uttara, Sector No. 45, Dhaka, Bangladesh");
            $table->text("slogan")->default("The customer is at the heart of our unique business model, which includes design.");
            $table->string("topbar_ads_text")->default("Free shipping, 30-day return or refund guarantee.");
            $table->string("banner")->default("assets/img/hero/hero-1.jpg");
            $table->unsignedFloat("delivery_charge")->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
