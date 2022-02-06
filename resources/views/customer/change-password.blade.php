@extends('customer.layout')
@section("password","active")
@section('customer-content')

<div class="col-md-10">
    <div class="main-card mb-3 card">
        <div class="card-header">Change Password</div>
        <div class="card-body">
        <form action="{{route('customer.profile.reset-password')}}" method="post" >
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

@endsection
