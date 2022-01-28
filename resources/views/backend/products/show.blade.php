@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body text-center">
                    <h3>Product Details</h3>
                </div>
                
                <div class="card-body table-responsive">
                   <table class="table">
                       <tbody>
                          <tr><td><strong>Product Name:</strong></td><td class="text-left">{{$product->name}}</td><td rowspan="7"><img src="{{asset($product->image)}}" alt="" class="d-block mx-auto" style="width:280px;"></td></tr>
                          <tr><td><strong>Product Category:</strong></td><td class="text-left">{{$product->category->name}}</td></tr>
                          <tr><td><strong>Product Status:</strong></td><td class="text-left"><span class="badge badge-{{$product->status=='active'? 'success':'danger'}}">{{$product->status}}</span></td></tr>
                          <tr><td><strong>Product Price:</strong></td><td class="text-left">{{$product->price}} TK.</td></tr>
                          <tr><td><strong>Product Type:</strong></td><td class="text-left"><span class="badge badge-{{$product->type=='sale'? 'success':'primary'}}">{{$product->type}}</span></td></tr>
                          <tr><td><strong>Product Color:</strong></td><td class="text-left">{{$product->color}}</td></tr>
                          <tr><td><strong>Product Description:</strong></td><td class="text-left">{{$product->description}}</td></tr>
                          <tr><td colspan="2"><a href="{{url('/admin/product')}}" class="btn btn-primary mr-3">Back</a><a href='{{url("/admin/product/$product->id/edit")}}' class="btn btn-success">Edit</a></tr>
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
