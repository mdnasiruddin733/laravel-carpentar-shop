@extends('layouts.backend_layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Customer List
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th class="">Joined at</th>
                            <th class="">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $serial = 1 @endphp
                        @foreach($customers as $customer)
                            <tr>
                                <td class="text-center text-muted">{{ $serial, $serial++ }}</td>
                                <td class="">{{ $customer->name }}</td>
                                <td class="">{{ $customer->email }}</td>
                                <td class="">{{ $customer->created_at->format("d M, Y") }}</td>
                                <td class="">
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View
                                    </button>
                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete
                                    </button>
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
