@extends('layouts.backend_layout')
@section('breadcrumb-title'){{Str::slug($booking->product->name)}} @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body text-center">
                    <h3>Booking Details</h3>
                </div>
                
                <div class="card-body table-responsive">
                   <table class="table">
                       <tbody>
                          <tr><td><strong>Product Name:</strong></td><td class="text-left">{{$booking->product->name}}</td><td rowspan="7"><img src="{{asset($booking->product->image)}}" alt="" class="d-block mx-auto" style="width:280px;"></td></tr>
                          <tr><td><strong>Booker Name:</strong></td><td class="text-left">{{$booking->name}}</td></tr>
                           <tr><td><strong>Booker Email:</strong></td><td class="text-left">{{$booking->email}}</td></tr>
                            <tr><td><strong>Booker Phone:</strong></td><td class="text-left">{{$booking->phone}}</td></tr>
                             <tr><td><strong>Booker Address:</strong></td><td class="text-left">{{$booking->address}}</td></tr>
                             <tr><td><strong>Booker Country:</strong></td><td class="text-left">{{$booking->country}}</td></tr>
                             <tr><td><strong>Booker City:</strong></td><td class="text-left">{{$booking->city}}</td></tr>
                             <tr><td><strong>Booker Post-Code:</strong></td><td class="text-left">{{$booking->postcode}}</td></tr>
                          <tr><td><strong>Booking Status:</strong></td><td class="text-left"><span class="badge badge-{{$booking->status=='delivered'? 'success':'danger'}}">{{$booking->status}}</span></td></tr>
                          <tr><td><strong>Booking Price:</strong></td><td class="text-left">{{$booking->product->price}} TK.</td></tr>
                          <tr><td><strong>Booking Note:</strong></td><td class="text-left">{{$booking->note}}</td></tr>
                          <tr><td colspan="2"><a href="{{route('booking.index')}}" class="btn btn-primary mr-3">Back</a><a href='{{route('booking.edit',$booking->id)}}' class="btn btn-success">{{$booking->status=="pending"?"Deliver Booking":"Make Pending"}}</a></tr>
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
