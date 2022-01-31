@extends('layouts.backend_layout')
@section('breadcrumb-title') {{Auth::guard('admin')->user()->name}}@endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
               <div class="card-body">
                <form action="{{url('profile/store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Name:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::guard('admin')->user()->name}}">
                            @error('name')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Userame:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{Auth::guard('admin')->user()->username}}">
                            @error('short_name')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Email:</label></div>
                        <div class="col-md-10">
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{Auth::guard('admin')->user()->email}}">
                            @error('email')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2"> 
                        <div class="col-md-12">
                            <input type="submit" value="Save Profile" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
@endsection
