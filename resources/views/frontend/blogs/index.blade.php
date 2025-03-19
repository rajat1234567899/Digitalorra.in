@extends('frontend.layout')

@section('content')

<link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
@include('header.header')

<div class="section">
<h1>All Blogs</h1>
<div class="blogs">
    @foreach($blogs as $blog)
        <div>
            <img src="{{ asset('storage/' . $blog->image) }}" style="width: 100%;">
            <h2><a href="{{ url('blogs/' . $blog->slug) }}">{!! $blog->title !!}</a></h2>
            <p>{!!Str::limit($blog->content, 150)!!}</p>
        </div>
    @endforeach
    </div>
    </div>
    @include('header.footer')

@endsection
