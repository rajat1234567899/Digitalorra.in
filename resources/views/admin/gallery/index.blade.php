@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('gallery.create') }}" class="btn btn-primary">Upload Image</a>
        <div class="row mt-4">
            @foreach($images as $image)
                <div class="col-md-3">
                    <img src="{{ asset('storage/'.$image->image) }}" class="img-fluid">
                    <form action="{{ route('gallery.destroy', $image->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mt-2">Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection