@extends('layouts.backend_layout')
@section('breadcrumb-title') Customer @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body text-center">
                    <h3>Customer Details</h3>
                </div>
                
                <div class="card-body table-responsive">
                   <table class="table">
                       <tbody>
                          <tr><td><strong>Customer Name:</strong></td><td class="text-left">{{$customer->name}}</td></tr>
                          <tr><td><strong>Customer Email:</strong></td><td class="text-left">{{$customer->email}}</td></tr>
                          <tr><td><strong>Customer Joined:</strong></td><td>{{$customer->created_at->format('d M, Y')}}</td></tr>
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
