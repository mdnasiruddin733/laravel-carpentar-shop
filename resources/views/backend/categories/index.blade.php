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
                <div class="card-header">Categories List
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('categories.create') }}" class="mb-2 mr-2 btn btn-primary">Add Category</a>
                    </div>
                </div>
                <div class="table-responsive">
                    @if(count($categories)>0)
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Title</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sereal = 1 @endphp
                        @foreach($categories as $category)
                        <tr>
                            <td class="text-center text-muted">{{ $sereal,$sereal++ }}</td>
                            <td class="">{{ $category->name }}</td>
                            <td class="text-center">
                                <div class="badge {{$category->status=="active"?'badge-success':'badge-danger'}}">{{ $category->status }}</div>
                            </td>
                            <td class="text-center">{{ $category->created_at }}</td>
                            <td class="text-center">
                                <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url('admin/categories/'.$category->id)}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm">View</a>
                                <a
                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                    href="{{ url('admin/delete-category',$category->id) }}"  id="PopoverCustomT-1" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 class="text-center text-muted m-3">No category found</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
