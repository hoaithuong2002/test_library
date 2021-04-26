@extends('layouts.pages.app.app')
@section('login')
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <img class="align-content" src="{{asset('images/logo.png')}}" alt="">
                </div>
                <div class="login-form">
                    @if (Session::has('not-login'))
                        <div class="not-login">
                            <p class="text-danger">{{ Session::get('not-login') }}</p>
                        </div>
                    @endif
                <!-- Hiển thị trạng thái chưa đăng nhập -->
                    @if (Session::has('not-login'))
                        <div class="not-login">
                            <p class="text-danger">{{ Session::get('not-login') }}</p>
                        </div>
                    @endif
                    @if(Session::has('login-error'))
                        <div class="alert alert-danger">
                            {{ Session::get('login-error') }}
                        </div>
                    @endif
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i
                                        class="ti-facebook"></i>Sign in with facebook
                                </button>
                            </div>
                        </div>
                        <div class="register-link m-t-15 text-center">
                            <p>Don't have account ? <a href="{{route('admin.register')}}"> Sign Up Here</a></p>
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
