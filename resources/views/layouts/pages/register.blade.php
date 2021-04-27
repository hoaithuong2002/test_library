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
                <div>
                    <form method="post" action="{{route('admin.register')}}" class="login-form">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input value="{{ old('name')}}" type="text" name="name"
                                       class="form-control  @error('name') border-danger  @enderror" required>
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input value="{{ old('phone') }}" type="number"
                                       class="form-control @error('name') border-danger  @enderror" required>
                                @error('phone')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input value="{{ old('email')}}" type="text" name="email"
                                   class="form-control  @error('email') border-danger  @enderror" required>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address </label>
                            <input value="{{old('address')}}" type="text" name="address"
                                   class="form-control  @error('address') border-danger  @enderror" required>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="avatar">Avatar</label>
                                <div class="row" id="avatar-user">
                                    <input type="file"
                                           class="form-control col-md-6  @error('image') border-danger  @enderror"
                                           required>
                                </div>
                                <div>
                                    @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="role">Role</label>
                                <select id="role" class="form-control">
                                    <option value="1" id="" >admin</option>
                                    <option value="2">editor</option>
                                    <option value="3">customer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign in</button>
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
