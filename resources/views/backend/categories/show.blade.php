@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body text-center">
                    <h3>Category Name:&nbsp;{{$category->name}}</h3>
                    <span class="badge badge-{{$category->status=='active'?'success':'danger'}}">{{$category->status}}</span>
                </div>
                <div class="card-body table-responsive">
                    @if(count($category->products)>0)
                   <table class="table">
                       <thead>
                           <tr>
                               <td>Product Image</td>
                               <td>Product Name</td>
                               <td>Product Type</td>
                               <td>Product Sttus</td>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach($category->products as $product)
                                <td><img src="{{asset($product->image)}}" alt="Product image" style="height:80px; width:120px;"></td>
                               <td>{{$product->name}}</td>
                               <td class="text-capitalize">{{$product->type}}</td>
                               <td class="text-capitalize">{{$product->status}}</td>
                            @endforeach
                       </tbody>
                   </table>
                   @else 
                   <h3 class="text-center text-muted m-3">No products found under this category</h3>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection
