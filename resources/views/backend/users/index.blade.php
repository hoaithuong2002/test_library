@extends('layouts.master')
@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="text-align: center">Management User </h4>
                        <button type="button"  class="btn btn-outline-success" ><a href="{{route('user.create')}}">Add User</a></button>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th class="avatar">Avatar</th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key => $user)
                                     <tr class="user-list">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td><img src="{{asset('storage/avatar/' .$user->avatar)}}" width="200" class="avatar" alt="avatar"></td>
{{--                                        <td>--}}
{{--                                            @foreach($user->roles as $role)--}}
{{--                                                {{ $role->name. ',' }}--}}
{{--                                            @endforeach--}}

{{--                                        <td>--}}
                                         <td>
                                            <a onclick="return confirm('Are you sure delete user: {{ $user->name }}')"
                                               class="btn btn-danger" href="{{ route('user.delete', $user->id) }}">Delete</a>
                                            <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th class="avatar">Avatar</th>
                                    <th>Role</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div> <!-- /.table-stats -->
{{--                        {{ $users->links() }}--}}
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

        </div>
    </div>
@endsection
