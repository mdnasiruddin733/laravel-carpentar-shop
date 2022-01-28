@extends('layouts.backend_layout')
@section('breadcrumb-title') Repairing Details @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body text-center">
                    <h3> Repairing Details </h3>
                </div>
                
                <div class="card-body table-responsive">
                   <table class="table">
                       <tbody>
                          <tr>
                            <td><strong>Customer Name:</strong></td><td class="text-left">{{$reparing->first_name." ".$reparing->last_name}}</td>
                            <td rowspan="7" colspan="7">
                                <img src="{{asset($reparing->image)}}" alt="" class="d-block mx-auto" style="width:280px;">
                                
                            </td>
                         </tr>
                          <tr><td><strong>Email:</strong></td><td class="text-left"><a href="mailto:{{$reparing->email}}">{{$reparing->email}}</a></td></tr>
                          <tr><td><strong>Phone:</strong></td><td class="text-left"><a href="tel:{{$reparing->email}}">{{$reparing->phone}}</a></td></tr>
                          <tr><td><strong>Address:</strong></td><td class="text-left">{{$reparing->address}}</td></tr>
                          <tr><td><strong>City:</strong></td><td class="text-left">{{$reparing->city}}</td></tr>
                          <tr><td><strong>Postcode:</strong></td><td class="text-left">{{$reparing->postcode}}</td></tr>
                          <tr><td><strong>Request Date:</strong></td><td class="text-left">{{$reparing->created_at->format('d M, Y')}}</td></tr>
                          <tr><td><strong>Status</strong></td><td class="text-left"><span class="badge badge-{{$reparing->status=='pending'? 'warning':'success'}}">{{$reparing->status}}</span></td></tr>
                          <tr><td><strong>Repairing Note:</strong></td><td class="text-left">{{$reparing->note}}</td></tr>
                           <tr><td colspan="2">
                               <a href="{{url('/admin/services')}}" class="btn btn-primary mr-3">Back</a>
                            @if($reparing->status=="pending")
                                <a href='{{url("/admin/reparing/approve/$reparing->id")}}' class="btn btn-success">Approve</a>
                            @else
                             <a href='{{url("/admin/reparing/disapprove/$reparing->id")}}' class="btn btn-warning">Make Pending</a>
                            @endif
                            </tr>
                       </tbody>
                       
                   </table>
                </div>
            </div>
        </div>
    </div>
@endsection
