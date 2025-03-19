<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toc.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
  <script src="{{ asset('js/toc.js') }}"></script>
</head>
<body>
@include('header.header')
<div class="section">
<div class="container">
    <div class="main-content">
        <img src="{{ asset('storage/' . $blog->image) }}" class="post-img">
        <h1 class="post-title">{{ $blog->title }}</h1>
        <div class="post-meta">Published on {!! $blog->created_at->format('M d, Y') !!}</div>
          <!-- Table of Contents -->
          <div id="table-of-contents" class="card shadow-sm mb-4">
                <div class="card-header bg-dark text-white">
                    <h5 class="mb-0">Table of Contents</h5>
                </div>
                <div class="card-body">
                    <ul id="toc-list" class="list-unstyled"></ul>
                </div>
            </div>
        <div class="post-content">
            <p>{!! $blog->content !!}</p>
        </div>
    </div>

    <div class="sidebar">
        <h3>Related Posts</h3>
        <ul>
        </ul>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@include('header.footer')
</body>
</html>
