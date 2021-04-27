@extends('layouts.master')
@section('content')
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title" style="text-align: center">Management library </h4>
                        <button type="button" class="btn btn-outline-success"><a href="{{route('library.create')}}">Add
                                library</a></button>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>phone</th>
                                    <th class="avatar">Avatar</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($libraries as $key => $library)
                                    <tr class="library-list">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $library->name }}</td>
                                        <td>{{ $library->address }}</td>
                                        <td>{{ $library->phone }}</td>
                                        <td><img src="{{asset('storage/' .$library->image)}}" width="200" class="avatar"
                                                 alt="avatar"></td>
                                        <td>
                                            <a onclick="return confirm('Are you sure delete library: {{ $library->name }}')"
                                               class="btn btn-danger"
                                               href="{{ route('library.delete', $library->id) }}">Delete</a>
                                            <a class="btn btn-primary" href="{{ route('library.edit', $library->id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="serial">#</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>phone</th>
                                    <th class="avatar">Avatar</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{ $libraries->links() }}
                        </div> <!-- /.table-stats -->
                    </div>
                </div> <!-- /.card -->
            </div>  <!-- /.col-lg-8 -->

        </div>
    </div>
@endsection
