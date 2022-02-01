<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faqs=Faq::latest()->get();
        return view("backend.faqs.index",compact('faqs'));
    }

    public function create(){
        return view("backend.faqs.create");
    }

    public function store(Request $req){
        $this->validate($req,[
            "question"=>"required",
            "answer"=>"required"
        ]);
        $faq=new Faq();
        $faq->question=$req->question;
        $faq->answer=$req->answer;
        $faq->save();
        return redirect(route("faq.index"))->with([
            "type"=>"success",
            "message"=>"FAQ created successfully"
        ]);
    }

    public function edit($id){
        $faq=Faq::findOrFail($id);
        return view("backend.faqs.edit",compact('faq'));
    }

    public function update(Request $req){
        $this->validate($req,[
            "id"=>"required",
            "question"=>"required",
            "answer"=>"required"
        ]);
        $faq=Faq::findOrFail($req->id);
        $faq->question=$req->question;
        $faq->answer=$req->answer;
        $faq->save();
        return redirect(route("faq.index"))->with([
            "type"=>"success",
            "message"=>"FAQ updated successfully"
        ]);
    }

    public function delete($id){
        $faq=Faq::findOrFail($id);
        $faq->delete();
        return redirect(route("faq.index"))->with([
            "type"=>"success",
            "message"=>"FAQ deleted successfully"
        ]);
    }
}
