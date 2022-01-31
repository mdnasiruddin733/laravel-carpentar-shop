@extends('layouts.backend_layout')
@section('breadcrumb-title') Change Password @endsection
@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
               <div class="card-body">
                <form action="{{route('profile.reset-password')}}" method="post" >
                    @csrf
                     <div class="row mb-2">
                        <div class="col-md-2"><label for="">Current Password:</label></div>
                        <div class="col-md-10">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="">
                            @error('password')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">New Password:</label></div>
                        <div class="col-md-10">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="">
                            @error('password')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2"><label for="">Confirm Password:</label></div>
                        <div class="col-md-10">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="">
                            @error('password_confirmation')
                             <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2"> 
                        <div class="col-md-12">
                            <input type="submit" value="Change Password " class="btn btn-success">
                        </div>
                    </div>
                </form>
               
            </div>
            </div>
        </div>
    </div>
@endsection
