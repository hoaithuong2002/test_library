@extends('layouts.master')
@section('title')
    Add User
@endsection
@section('content')
    <section class="content">
        <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="bg-flat-color-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Add User</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone" class=" form-control-label">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class=" form-control-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address" class=" form-control-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="row form-group">
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="avatar" class=" form-control-label">Avatar</label>
                                    <input type="file" id="avatar" name="avatar" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-2">Role
                                <select name="role" id="role">Role
                                    <option value="1">admin</option>
                                    <option value="2">editor</option>
                                    <option value="3 ">customer</option>
                                </select>
                            </div>
                            <div class="col-sm-10">
                                @foreach($roles as $role)
                                    <div class="form-check">
                                        <input value="{{ $role->id }}" name="role_id[{{$role->id}}]"
                                               class="form-check-input"
                                               type="checkbox" id="gridCheck-{{$role->id}}" required>
                                        <label class="form-check-label" for="gridCheck-{{$role->id}}">
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Add User</button>
                            <a href="{{route('user.index')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
