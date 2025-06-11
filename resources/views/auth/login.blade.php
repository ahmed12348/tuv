@extends('frontend.layouts.index')
@section('content')

    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{url('frontendDesing')}}/assets/images/shapes/combined-circle-shape-2.png" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1>LOGIN / SIGNUP</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">LOGIN / SIGNUP</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <div class="authentication-section pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 pb-30">
                    <div class="authentication-item">
                        <h3>Register</h3>
                        <div class="authentication-form">
                            <form method="post" action="{{route('register')}}">
                                @csrf
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="text" name="name" class="form-control" required
                                               placeholder="Username*">
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" required placeholder="Email*">
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" required
                                               placeholder="Password*">
                                    </div>
                                </div>
                                <p class="font-italic mb-20 form-desc">The password must be at least twelve characters long,
                                    contain upper and lower case letters, contain numbers, contain symbols like ! " ? $ % ^
                                    & ).</p>
                                <button type="submit"  class="btn main-btn full-width mb-20">REGISTER NOW</button>
                                <div class="authentication-account-access">
                                    <div class="authentication-account-access-item">
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="check2">
                                            <label for="check2">I agree to the <a href="#">Privacy
                                                    Policy</a> & <a href="#">Terms of Service</a></label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pb-30">
                    <div class="authentication-item">
                        <h3>Login</h3>
                        <div class="authentication-form">
                            <form action="{{url('login')}}" method="post">
                                @csrf
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" required
                                               placeholder="Username/Email Address*">
                                    </div>
                                </div>
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" required
                                               placeholder="E-mail*">
                                    </div>
                                </div>
                                <div class="authentication-account-access mb-20">
                                    <div class="authentication-account-access-item">
                                        <div class="input-checkbox">
                                            <input type="checkbox" id="check1">
                                            <label for="check1">Remember Me!</label>
                                        </div>
                                    </div>
                                    <div class="authentication-account-access-item">
                                        <div class="authentication-link">
                                            <a href="{{url('password/reset')}}">Forget password?</a>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn main-btn full-width">LOG IN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
