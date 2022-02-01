@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-content-center align-items-center">
        <div class="col-md-5 mt-5">
            <div class="card" style="border-radius: 20px">
                <div class="card-body p-5">
                    <form method="POST" action="{{ route('admin.login.post') }}">
                        @csrf
                        <div class="col-12 mb-3">
                            <h3 class="mb-4 text-center">{{ __('Admin Login') }}</h3>
                            <div class="form-group">
                                <label for="email" class="">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="password" class="">{{ __('Password') }}</label>
                                <input id="password" type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <span class="text-danger">{{ session('login-error') }}</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary px-5 py-2">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
