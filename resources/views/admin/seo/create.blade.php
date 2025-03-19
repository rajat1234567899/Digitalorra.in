@extends('admin.dashboard')

@section('title', 'Add SEO Setting')

@section('content')
<div class="container">
    <h1 class="h4 fw-bold text-primary">Add SEO Setting</h1>

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
            <h5 class="mb-0">New SEO Entry</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.seo.store') }}" method="POST">
                @csrf

                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th class="bg-light">Page Name</th>
                            <td>
                                <input type="text" name="page" class="form-control shadow-sm" required>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Meta Title</th>
                            <td>
                                <input type="text" name="meta_title" class="form-control shadow-sm" required>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Meta Description</th>
                            <td>
                                <textarea name="meta_description" class="form-control shadow-sm" rows="3" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th class="bg-light">Meta Keywords</th>
                            <td>
                                <textarea name="meta_keywords" class="form-control shadow-sm" rows="3" required></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-between mt-3">
                    <a href="{{ route('admin.seo.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save SEO
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
