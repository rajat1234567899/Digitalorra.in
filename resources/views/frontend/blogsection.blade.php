@extends('layouts.app')

@section('content')
    <h1>{{ $blog->title }}</h1>
    <img src="{{ asset('storage/' . $blog->image) }}" width="400">
    <p>{{ $blog->content }}</p>
@endsection
