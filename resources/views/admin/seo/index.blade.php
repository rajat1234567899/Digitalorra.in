@extends('admin.dashboard')

@section('title', 'SEO Settings')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold">SEO Settings</h1>
        <a href="{{ route('admin.seo.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New SEO Setting
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Page</th>
                        <th>Meta Title</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seoSettings as $index => $seo)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ ucfirst($seo->page) }}</td>
                            <td>{{ $seo->meta_title }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.seo.edit', $seo->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('admin.seo.destroy', $seo->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
