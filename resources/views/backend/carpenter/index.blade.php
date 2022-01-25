@extends('layouts.backend_layout')
@section('breadcrumb-title') Product List @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Carpenter List
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center text-muted">#1</td>
                            <td class="">Lorem</td>
                            <td class="text-center">23/04/2022</td>
                            <td class="text-center">
                                <div class="badge badge-success">Delivered</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-1" class="btn btn-info btn-sm">Edit</button>
                                <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View </button>
                                <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
