@extends('layouts.backend_layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Category Edit
                    <div class="btn-actions-pane-right">
                        <a href="{{ route('categories.index') }}" class="mb-2 mr-2 btn btn-primary">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('categories.update',$category->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                                           placeholder="Category name">
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" class="form-control">
                                        <option selected value="">Select one</option>
                                        @if($category->status === 'active')
                                            <option selected value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        @elseif($category->status === 'inactive')
                                            <option selected value="active">Active</option>
                                            <option selected value="inactive">Inactive</option>
                                        @else
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 my-4">
                                <button class="btn btn-success px-5 py-2" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

