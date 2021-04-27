@extends('layouts.master')
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Edit Library
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('book.update', $book->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{$book->name? $book->name: old('name')}}" type="text" name="name"
                           class="form-control  @error('name') border-danger  @enderror">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Book List</label>
                    <input value="{{$book->address? $book->address: old('book')}}" type="text" name="book"
                           class="form-control  @error('book') border-danger  @enderror">
                    @error('book')
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

                <div class="form-group">
                    <label>Status</label>
                    <input value="{{$book->status? $book->status: old('status')}}" type="text" name="status"
                           class="form-control  @error('status') border-danger  @enderror">
                    @error('status')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input value="{{$book->description? $book->description: old('description')}}" type="text" name="description"
                           class="form-control  @error('description') border-danger  @enderror">
                    @error('description')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
