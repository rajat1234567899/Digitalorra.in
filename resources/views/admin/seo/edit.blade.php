@extends('admin.dashboard')

<head>
    <link rel="stylesheet" href="{{ asset('css/admin-seo.css') }}">
</head>

@section('title', 'Edit SEO for ' . ucfirst($seo->page))

@section('content')
<div class="container">
    <h1 class="h4 fw-bold text-primary">Edit SEO for <span class="text-dark">{{ ucfirst($seo->page) }}</span></h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-lg border-0 mt-4">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0">Update SEO Information</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.seo.update', $seo->id) }}" method="POST">
                @csrf

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Meta Title</th>
                            <td>
                                <input type="text" name="meta_title" class="form-control shadow-sm" value="{{ $seo->meta_title }}" required>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Meta Description</th>
                            <td>
                                <textarea name="meta_description" class="form-control shadow-sm" rows="3" required>{{ $seo->meta_description }}</textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Meta Keywords</th>
                            <td>
                                <input type="text" name="meta_keywords" class="form-control shadow-sm" value="{{ $seo->meta_keywords }}" required>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('admin.seo.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update SEO
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
