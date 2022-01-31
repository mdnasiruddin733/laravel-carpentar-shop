<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
class SettingsController extends Controller
{
    public function save(Request $req){
        $this->validate($req,[
            "name"=>"required",
            "short_name"=>"required",
            "email"=>"required|email",
            "phone"=>"required",
            "address"=>"required",
            "slogan"=>"required|max:200",
            "topbar_ads_text"=>"required|max:100",
            "delivery_charge"=>"required",
            "logo"=>"nullable|image|max:10240",
            "favicon"=>"nullable|image|max:10240",
            "banner"=>"nullable|image|max:10240"

        ]);
        
        $settings=Settings::firstOrFail();
        $settings->name=$req->name;
        $settings->short_name=$req->short_name;
        $settings->email=$req->email;
        $settings->phone=$req->phone;
        $settings->address=$req->address;
        $settings->slogan=$req->slogan;
        $settings->topbar_ads_text=$req->topbar_ads_text;
        $settings->delivery_charge=$req->delivery_charge;
        
        if($req->logo){
             if($req->prev_logo!=="assets/img/logo.jpg"){
                if(file_exists($req->prev_logo)){
                    unlink($req->prev_logo);
                     $settings->logo=$this->uploadPhoto($req->logo);
                }
               

             }
              $settings->logo=$this->uploadPhoto($req->logo);
        }
       if($req->favicon){
           if($req->prev_favicon!=="assets/img/logo.jpg"){
                if(file_exists($req->prev_favicon)){
                    unlink($req->prev_favicon);
                     $settings->favicon=$this->uploadPhoto($req->favicon);
                }

             }
             $settings->favicon=$this->uploadPhoto($req->favicon);
           
       }
       if($req->banner){
           if($req->prev_banner!=="assets/img/hero/hero-1.jpg"){
                if(file_exists($req->prev_banner)){
                    unlink($req->prev_banner);
                    $settings->banner=$this->uploadPhoto($req->banner);
                }

             }
             $settings->banner=$this->uploadPhoto($req->banner);
            
       }
        
       $settings->save();

        return back()->with([
            "type"=>"success",
            "message"=>"Settings saved successfully"
        ]);
    }

    private function uploadPhoto($image){
        if($image){
            $extension=$image->getClientOriginalExtension();
            $filename=uniqid(time()).".".$extension;
            $image->storeAs("settings",$filename,"public");
            return "storage/settings/".$filename;
        }
    }
}
