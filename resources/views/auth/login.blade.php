@extends('layouts.main_app')
@section('title', 'TCMS | Sign in')
@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h4 class="text-center mb-5">
                Sign in to TCMS
            </h4>
            <div class="card">
                <div class="card-body">
                    <div class="result">
                        @if (session('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('fail') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Enter Your Email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Enter Your Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="bg-image" style="background-image: url('assets/media/img/login.jpg');">
    <div class="row mx-0 bg-black-50">
        <div class="hero-static col-md-6 col-xl-8 d-none d-md-flex align-items-md-end">
            <div class="p-4">
                <p class="fs-3 fw-semibold text-white">
                    We Deliver What You Request.
                </p>
                <p class="text-white-75 fw-medium">
                    Copyright &copy; <span data-toggle="year-copy"></span>
                </p>
            </div>
        </div>
        <div class="hero-static col-md-6 col-xl-4 d-flex align-items-center bg-body-extra-light">
            <div class="content content-full">
                <!-- Header -->
                <div class="px-4 py-2 mb-4">
                    <a class="link-fx fw-bold" href="">
                        <i class="fa-solid fa-truck"></i>
                        <span class="fs-4 text-body-color">TC</span><span class="fs-4">MS</span>
                    </a>
                    <h1 class="h3 fw-bold mt-4 mb-2">Welcome to Your Dashboard</h1>
                    <h2 class="h5 fw-medium text-muted mb-0">Please sign in</h2>
                </div>
                <!-- END Header -->

                <!-- Sign In Form -->
                <!-- jQuery Validation functionality is initialized with .js-validation-signin class in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js -->
                <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <form method="POST" action="{{ route('login') }}" class="js-validation-signin px-4">
                    @csrf

                    <div class="form-floating mb-4">
                        <input type="email" id="login-username" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" placeholder="Enter Your Email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="form-label" for="login-username">Username</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" id="login-password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            placeholder="Enter Your Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <label class="form-label" for="login-password">Password</label>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="login-remember-me"
                                name="login-remember-me">
                            <label class="form-check-label" for="login-remember-me">Remember Me</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <button type="submit" class="btn btn-lg btn-alt-primary fw-semibold">
                            Sign In
                        </button>
                        <div class="mt-4">
                            {{-- <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                href="op_auth_signup2.html">
                                Create Account
                            </a> --}}
                            <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block"
                                href="op_auth_reminder2.html">
                                Forgot Password
                            </a>
                        </div>
                    </div>
                </form>
                <!-- END Sign In Form -->
            </div>
        </div>
    </div>
</div>
@endsection
