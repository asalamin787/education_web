@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
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
    </div> --}}

    <!--authentication-->


    <div class="card my-5 col-xl-9 col-xxl-8 mx-auto rounded-4 overflow-hidden border-3 border-secondary p-3 bg-dark">
        <div class="row g-3">
            <div class="col-lg-6 d-flex">
                <div class="card-body p-5 w-100">
                    <img src="{{ asset('assets/images/logo-icon.png') }}" class="mb-4" width="45" alt="">
                    <h4 class="fw-bold text-light">Get Started Now</h4>
                    <p class="mb-0 text-light">Enter your credentials to login your account</p>
                    <div class="row g-3 my-4">
                        <div class="col-12 col-lg-12">
                            <button
                                class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100 text-white" style="background-color: #343a40"><img
                                    src="{{asset('assets/images/icons/google-2.png')}}" width="18" class="me-2" alt="">Log
                                In with Google</button>
                        </div>
                        <div class="col col-lg-12">
                            <button
                                class="btn btn-light py-2 font-text1 fw-bold d-flex align-items-center justify-content-center w-100 text-light" style="background-color: #343a40"><img
                                    src="assets/images/icons/apple-logo.png" width="18" class="me-2 text-light"
                                    alt="">Log In with Apple</button>
                        </div>
                    </div>
                    <div class="separator">
                        <div class="line"></div>
                        <p class="mb-0 fw-bold text-light">OR</p>
                        <div class="line"></div>
                    </div>
                    <div class="form-body mt-4">
                        <form method="POST" action="{{ route('login') }}" class="row g-3">
                            @csrf
                            <div class="col-12">
                                <label for="email" class="col-md-4 col-form-label text-light">{{ __('Email Address') }}</label>


                                <input id="email" type="email"
                                    class="form-control bg-transparent text-light @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label text-light">Password</label>

                                <div class="input-group" id="show_hide_password">
                                    <input type="password" class="form-control bg-transparent text-light @error('password') is-invalid @enderror"
                                        name="password" id="password" placeholder="Enter Password" required
                                        autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <a href="javascript:;" class="input-group-text bg-transparent text-light" style="text-decoration: none;"><i
                                            class="fa fa-eye-slash " aria-hidden="true"></i></a>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                            </div>

                            <div class="col-md-6 text-end">
                                @if (Route::has('password.request'))
                                    <a style="text-decoration: none;" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                @endif
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="text-start">
                                    <p class="mb-0 text-light">Don't have an account yet? <a style="text-decoration: none;" href="{{route('register')}}">Sign
                                            up here</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-lg-flex d-none">
                <div class="p-3 rounded-4 w-100 d-flex align-items-center justify-content-center border-3 bg-primary">
                    <img src="{{asset('assets/images/boxed-login.png')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </div>





    <!--authentication-->




    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>
@endsection
