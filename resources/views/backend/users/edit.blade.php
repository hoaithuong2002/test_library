@extends('layouts.master')
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Edit User
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{$user->name? $user->name: old('name')}}" type="text" name="name"
                           class="form-control  @error('name') border-danger  @enderror"required>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input value="{{$user->phone? $user->phone: old('phone')}}" type="text" name="phone"
                    class="form-control  @error('phone') border-danger  @enderror" required>
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input value="{{$user->email? $user->email: old('email')}}" type="text" name="email"
                    class="form-control  @error('email') border-danger  @enderror" required>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input value="{{$user->address? $user->address: old('address')}}" type="text" name="address"
                    class="form-control  @error('address') border-danger  @enderror" required>
                    @error('address')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <div class="row" id="avatar-user">
                        <input type="file" name ="avatar"
                               class="form-control col-md-6  @error('image') border-danger  @enderror" required>
                    </div>
                    <div id="list-input">

                    </div>
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">Role
                        <select name="role" id="role">Role
                            <option value="1">admin</option>
                            <option value="2">editor</option>
                            <option value="3">customer</option>
                        </select>
                    </div>
                    <div class="col-sm-10">
                        @foreach($roles as $role)
                            <div class="form-check">
                                <input value="{{ $role->id }}" name="role_id[{{$role->id}}]" class="form-check-input"
                                       type="checkbox" id="gridCheck-{{$role->id}}" required>
                                <label class="form-check-label" for="gridCheck-{{$role->id}}">
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
