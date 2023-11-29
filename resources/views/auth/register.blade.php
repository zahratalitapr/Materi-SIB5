@extends('layouts.app')

@section('content')

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user" method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- name register -->
                        <div class="form-group">
                            <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                    placeholder="First Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" id="exampleLastName"
                                    placeholder="Last Name">
                            </div> -->
                            <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" 
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- section register email -->
                        <div class="form-group">
                            <!-- <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                placeholder="Email Address"> -->

                                <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- section register password -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <!-- <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password"> -->
                                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="new-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                            </div>

                            <!-- section konfirmasi password -->
                            <div class="col-sm-6">
                                <!-- <input type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Repeat Password"> -->
                                    <input id="password-confirm" type="password" class="form-control form-control-user" 
                                    name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                            </div>
                        </div>

                        <!-- tombol register -->
                        <!-- <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a> -->
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Register') }}
                        </button>
                        <hr>

                        <!-- tombol register google & facebook -->
                        <a href="index.html" class="btn btn-google btn-user btn-block">
                            <i class="fab fa-google fa-fw"></i> Register with Google
                        </a>
                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="login.html">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

@endsection