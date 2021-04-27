@extends('layouts.master')
@section('content')
    <section class="content">
        <form method="post" action="{{route('book.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Add Book</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="book" class=" form-control-label">Book List</label>
                            <input type="text" name="book" id="book" class="form-control" required>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="avatar" class=" form-control-label">Avatar</label>
                                    <input type="file" name="avatar" id="avatar" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="status" class=" form-control-label">Status
                                        <select name="status" id="status">
                                            <option value="1">sách mới</option>
                                            <option value="2">sách cũ</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class=" form-control-label">Description</label>
                                <input type="text" name="description" id="description" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success"> Add Library</button>
                                <a href="{{route('book.index')}}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
@endsection
