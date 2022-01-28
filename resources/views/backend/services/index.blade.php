@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Repairing requests
                </div>
                <div class="table-responsive">
                    @if(count($repairings)>0)
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Repairing product</th>
                            <th class="text-center">Customer</th>
                            <th class="text-center">Request date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center" width="15%">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sereal = 1 @endphp
                        @foreach($repairings as $reparing)
                        <tr>
                            <td class="text-center text-muted">{{ $sereal,$sereal++ }}</td>
                            <td class=""><img height="60px" src="{{ asset($reparing->image)  }}" alt=""></td>
                            <td class="">{{ $reparing->first_name }} {{ $reparing->last_name }}</td>
                            <td class="text-center">{{ $reparing->created_at->format("d M, Y") }}</td>
                            <td class="text-center">
                                <div class="badge badge-{{$reparing->status=='pending'?'warning':'success'}}">{{$reparing->status}}</div>
                            </td>
                            <td class="text-center">

                                   <a href="{{url('admin/repairing/'.$reparing->id)}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View</a>
                                    <button class="btn btn-danger" data-link="{{url('admin/repairing/delete/'.$reparing->id)}}" onclick="confirmDelete(event)">Cancel</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else 
                    <h3 class="text-muted text-center my-3">No Repair Request Found</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
