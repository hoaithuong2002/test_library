@extends('layouts.master')
@section('content')
    <div class="clearfix">

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Data table</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Book List</th>
                                        <th>Avatar</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                    </tr>
                                    </thead>
                                    <tbody>
{{--                                    @foreach($books as $key => $book)--}}
{{--                                        <tr class="book-list">--}}
{{--                                            <td>{{ $key + 1 }}</td>--}}
{{--                                            <td>{{ $book->name }}</td>--}}
{{--                                            <td>{{ $book->book_list }}</td>--}}
{{--                                            <td><img src="{{asset('storage/' .$book->image)}}" width="200" class="avatar"--}}
{{--                                                     alt="avatar"></td>--}}
{{--                                            <td>{{ $book->status }}</td>--}}
{{--                                            <td>{{ $book->description }}</td>--}}
{{--                                            <td>--}}
{{--                                                <a onclick="return confirm('Are you sure delete book: {{ $book->name }}')"--}}
{{--                                                   class="btn btn-danger"--}}
{{--                                                   href="{{ route('book.delete', $book->id) }}">Delete</a>--}}
{{--                                                <a class="btn btn-primary" href="{{ route('book.edit', $book->id) }}">Edit</a>--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}

                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
    </div>
@endsection
