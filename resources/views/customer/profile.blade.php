@extends("customer.layout")
@section("profile","active")
@section("customer-content")
<div class="col-md-10">
    <div class="main-card mb-3 card">
        <div class="card-header">My Profile</div>
        <div class="card-body">
        <form action="{{route("customer.profile.update")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-md-2"><label for="">Name:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{auth()->user()->name}}">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-2"><label for="">Email:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Save Profile" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection