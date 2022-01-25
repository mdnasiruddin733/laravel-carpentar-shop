@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Repairing request
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Repairing product</th>
                            <th class="text-center">Customer</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Note</th>
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
                            <td class="text-center">{{ $reparing->phone }}</td>
                            <td class="text-center">{{ $reparing->email }}</td>
                            <td class="text-center">{{ $reparing->address }}</td>
                            <td class="text-center">{{ $reparing->note }}</td>
                            <td class="text-center">{{ $reparing->created_at }}</td>
                            <td class="text-center">
                                <div class="badge badge-warning">Pending</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View </button>
                                <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Cancel</button>
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
