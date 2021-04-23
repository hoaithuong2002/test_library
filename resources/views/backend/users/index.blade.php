@extends('layouts.master')
@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-xl-8">
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
                                    <th class="avatar"></th>
                                    <th>Role</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($users as $key => $user)
                                    <tr class="user-list">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $user->name }}</td>
{{--                                        <td><img src="{{ asset('storage/' . $user->image) }}" width="150" alt=""></td>--}}
                                        <td>{{ $user->email }}</td>
                                        <td>
{{--                                            @foreach($user->roles as $role)--}}
{{--                                                {{ $role->name. ',' }}--}}
{{--                                            @endforeach--}}
                                        </td>
                                        <td><a href="">{{  $user->group->name ?? '' }}</a></td>
                                        <td>
                                            <a onclick="return confirm('Are you sure delete user: {{ $user->name }}')"
                                               class="btn btn-danger" href="{{ route('user.delete', $user->id) }}">Delete</a>
                                            <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
{{--                            {{ $users->links() }}--}}
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

            <div class="col-xl-4">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                                    <div id="flotPie1" class="float-chart"></div>
                                </div>
                            </div>
                        </div><!-- /.card -->
                    </div>

                    <div class="col-lg-6 col-xl-12">
                        <div class="card bg-flat-color-3  ">
                            <div class="card-body">
                                <h4 class="card-title m-0  white-color ">August 2018</h4>
                            </div>
                            <div class="card-body">
                                <div id="flotLine5" class="flot-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-md-4 -->
        </div>
    </div>
@endsection
