@extends('layouts.master')
@section('title')
    Add Library
@endsection
@section('content')
    <section class="content">
        <form method="post" action="{{route('library.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Add User</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="name" class=" form-control-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="address" class=" form-control-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div>
                        <div class="row form-group">
                            <div class="form-group">
                                <label for="phone" class=" form-control-label">Phone</label>
                                <input type="number" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                    <label for="avatar" class=" form-control-label">Avatar</label>
                                    <input type="file" id="avatar" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"> Add Library</button>
                            <a href="{{route('user.index')}}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
