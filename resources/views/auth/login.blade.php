{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.backend.authmaster')

@section('content')

<div class="row signpages text-center">
    <div class="col-md-12">
        <div class="card">
            <div class="row row-sm">
                <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                    <div class="mt-5 pt-4 p-2 pos-absolute">
                        <img src="assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo">
                        <div class="clearfix"></div>
                        <img src="assets/img/svgs/user.svg" class="ht-100 mb-0" alt="user">
                        <h5 class="mt-4 text-white">Create Your Account</h5>
                        <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                    <div class="container-fluid">
                        <div class="row row-sm">
                            <div class="card-body mt-2 mb-2">
                                <img src="assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                <div class="clearfix"></div>
                                <form>
                                    <h5 class="text-left mb-2">Signin to Your Account</h5>
                                    <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to create, discover and connect with the global community</p>
                                    <div class="form-group text-left">
                                        <label>Email</label>
                                        <input class="form-control" placeholder="Enter your email" type="text">
                                    </div>
                                    <div class="form-group text-left">
                                        <label>Password</label>
                                        <input class="form-control" placeholder="Enter your password" type="password">
                                    </div>
                                    <button class="btn ripple btn-main-primary btn-block">Sign In</button>
                                </form>
                                <div class="text-left mt-5 ml-0">
                                    <div class="mb-1"><a href="">Forgot password?</a></div>
                                    <div>Don't have an account? <a href="#">Register Here</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
