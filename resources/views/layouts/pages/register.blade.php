@extends('layouts.pages.app.app')
@section('register')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="{{route('admin.register')}}" class="login-form">
                        @csrf
                        <div class="form-group">
                            <label>User Name</label>
                            <input value="{{ old('name')}}" type="text" name="name"
                                   class="form-control  @error('name') border-danger  @enderror" required>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input value="{{ old('email')}}" type="text" name="email"
                                   class="form-control  @error('email') border-danger  @enderror" required>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input value="{{old('password')}}" type="password" name="password" id="password"
                                   class="form-control @error('password') border-danger @enderror" required >
                            @error('password')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i
                                        class="ti-facebook"></i>Register with facebook
                                </button>
                                <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i
                                        class="ti-twitter"></i>Register with twitter
                                </button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="{{route('admin.login')}}"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
@endsection
