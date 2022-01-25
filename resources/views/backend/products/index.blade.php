@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                @if(session('success'))
                    <div class="alert alert-success m-3">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">
                    Product List
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('product.create') }}" class="mb-2 mr-2 btn btn-primary">Add Product</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Product</th>
                            <th>Product Name</th>
                            <th>Type</th>
                            <th>Category</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sereal = 1 @endphp
                        @foreach($products as $product)
                            <tr>
                                <td class="text-center text-muted">{{ $sereal,$sereal++ }}</td>
                                <td class="">
                                    <img width="50px" src="{{ asset($product->image) }}" alt="">
                                </td>
                                <td class="">{{ $product->name }}</td>
                                <td class="">{{ $product->type }}</td>
                                <td class="">{{ $product->category['name']}}</td>
                                <td class="text-center">
                                    <div class="badge badge-success">{{ $product->status }}</div>
                                </td>
                                <td class="text-center">{{ $product->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ route('product.edit',$product->id) }}" id="PopoverCustomT-1" class="btn btn-info btn-sm">Edit
                                    </a>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View
                                    </button>
                                    <a
                                        onclick="return confirm('Are you sure you want to delete this item?');"
                                        href="{{ url('admin/delete-product',$product->id) }}"  id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
