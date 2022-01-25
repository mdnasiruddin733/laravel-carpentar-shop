@extends('layouts.frontend_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 my-5">
            <div class="card py-3">
                <h3 class="text-capitalize text-center py-3">Customer Login</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mb-3">

                            <div class="form-group">
                                <label for="password" class=" col-form-label text-md-end">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row mb-3">
                                <div class="col-md-6 ">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 my-3">
                            <div class="row mb-0">
                                <div class="col-md-6 ">
                                    <button type="submit" class="btn btn-primary  px-5">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-md-6 ">
                                    <a href="{{ route('register') }}">Create an account!</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
