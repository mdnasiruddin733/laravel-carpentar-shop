@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Order List
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Product</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key=>$order)
                        <tr>
                            <td class="text-center text-muted">#{{++$key}}</td>
                            <td class="">{{$order->product->name}}</td>
                            <td class="text-center">{{$order->created_at->format('d/m/Y')}}</td>
                            <td class="text-center">
                                <div class="badge badge-{{$order->status=="pending"?"warning":"success"}}">{{$order->status}}</div>
                            </td>
                            <td class="text-center">
                                <a href='{{url("admin/download/money-receipt/$order->id")}}' id="PopoverCustomT-1" class="btn btn-info btn-sm">Money receipt</a>
                                <a href="{{route('orders.show',$order->id)}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View</a>
                                    <button
                                        onclick="confirmDelete(event)"
                                        data-link="{{ route('orders.delete',$order->id) }}"  id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete</button>
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
