@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Upload</button>
        </form>
    </div>
@endsection
