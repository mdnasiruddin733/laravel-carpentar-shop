<?php

namespace App\Http\Controllers;

use App\Models\backend\Service;
use Illuminate\Http\Request;

class RepairController extends Controller
{
    public function show($id){
        $reparing=Service::findOrFail($id);
        return view("backend.services.show",compact('reparing'));
    }

    public function approve($id){
        $service=Service::findOrFail($id);
        $service->status="approved";
        $service->save();
        return back()->with([
            "type"=>"success",
            "message"=>"Repairing request approved successfully"
        ]);
    }
    public function disapprove($id){
        $service=Service::findOrFail($id);
        $service->status="pending";
        $service->save();
        return back()->with([
            "type"=>"warning",
            "message"=>"Repairing request is not approved"
        ]);
    }

    public function delete($id){
        $service=Service::findOrFail($id);

        if(file_exists($service->image)){
            unlink($service->image);
        }
        $service->delete();
         return back()->with([
            "type"=>"error",
            "message"=>"Repairing request is deleted"
        ]);
    }
}
