@extends("customer.layout")
@section("user-details","active")
@section("customer-content")
<div class="col-md-10">
    <div class="main-card mb-3 card">
        <div class="card-header">My Profile Details</div>
        <div class="card-body">
        <form action="{{route("customer.profile.details.update")}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-md-2"><label for="">Country:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{auth()->user()->details->country}}">
                    @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-2"><label for="">City:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control  @error('city') is-invalid @enderror" name="city" value="{{auth()->user()->details->city}}">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-2"><label for="">Address:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control  @error('address') is-invalid @enderror" name="address" value="{{auth()->user()->details->address}}">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><label for="">Post Code:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control  @error('postcode') is-invalid @enderror" name="postcode" value="{{auth()->user()->details->postcode}}">
                    @error('postcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-2"><label for="">Phone:</label></div>
                <div class="col-md-10">
                    <input type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" value="{{auth()->user()->details->phone}}">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row mb-2"> 
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Save Profile Details" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection