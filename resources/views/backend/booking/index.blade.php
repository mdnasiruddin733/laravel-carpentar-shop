@extends('layouts.backend_layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Booking List
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        
                        <tr>
                            <th class="text-center">#</th>
                            <th>Title</th>
                            <th class="text-center">Booked at</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        
                        </thead>
                        <tbody>
                        @foreach($bookings as $key=>$booking)
                        <tr>
                            <td class="text-center text-muted">{{++$key}}</td>
                            <td class="">{{$booking->product->name}}.</td>
                            <td class="text-center">{{$booking->created_at->format("d M, Y")}}</td>
                            <td class="text-center">
                                <div class="badge badge-{{$booking->status=="pending"?"warning":"success" }}">{{$booking->status}}</div>
                            </td>
                            <td class="text-center">
                                <a href='{{route('booking.edit',$booking->id)}}' class="btn btn-success">{{$booking->status=="pending"?"Deliver Booking":"Make Pending"}}</a>
                                   <a href="{{route('booking.show',$booking->id)}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View</a>
                                    <button
                                        onclick="confirmDelete(event)"
                                        data-link="{{ route('booking.delete',$booking->id) }}"  id="PopoverCustomT-1" class="btn btn-danger btn-sm">Cancel</button>
                                </td>
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
