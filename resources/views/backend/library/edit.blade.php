@extends('layouts.master')
@section('content')
    <div class="card mt-2">
        <div class="card-header">
            Edit Library
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('library.update', $library->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{$library->name? $library->name: old('name')}}" type="text" name="name"
                           class="form-control  @error('name') border-danger  @enderror">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input value="{{$library->address? $library->address: old('address')}}" type="text" name="address"
                           class="form-control  @error('address') border-danger  @enderror">
                    @error('address')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input value="{{$library->phone? $library->phone: old('phone')}}" type="text" name="phone"
                           class="form-control  @error('phone') border-danger  @enderror">
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <div class="row" id="avatar-library">
                        <input type="file" name="image[]"
                               class="form-control col-md-6  @error('image') border-danger  @enderror">
                        <button type="button" id="add-file-avatar" onclick="addInputFile()"
                                class="btn btn-success ml-2">
                        </button>
                    </div>
                    <div id="list-input">

                    </div>
                    @error('image')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" value="{{old('email')}}" name="{{ ($library->email) ? $library->email : old('email') }}" class="form-control  @error('email') border-danger  @enderror">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
