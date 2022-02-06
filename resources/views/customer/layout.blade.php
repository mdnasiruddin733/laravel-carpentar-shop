@extends("layouts.frontend_layout")

@section("content")
<style>

    .active{
        background-color: #d41132 !important;
    }
</style>
        <div class="row mx-auto my-5">
        <div class="col-md-2">
            <div class="card">
                <div class="card-body">
                   <a href="{{route("customer.profile")}}" class="btn btn-primary btn-block @yield('profile')">Profile</a>
                   <a href="{{route("customer.profile.details")}}" class="btn btn-primary btn-block @yield('user-details')">My Information</a>
                   <a href="{{route("customer.profile.my-orders")}}" class="btn btn-primary btn-block @yield('orders')">My Orders</a>
                   <a href="{{route("customer.profile.change-password")}}" class="btn btn-primary btn-block @yield('password')">Change Password</a>
                </div>
            </div>
        </div>
        @yield("customer-content")
    </div>
@endsection