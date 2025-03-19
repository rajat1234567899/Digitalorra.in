@extends('admin.dashboard')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 fw-bold">About Us Content</h1>
        <a href="{{ route('admin.aboutus.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Section
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Section Name</th>
                            <th>Content</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aboutuscontents as $index => $aboutuscontent)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ ucfirst($aboutuscontent->section) }}</td>
                                <td>{!! Str::limit($aboutuscontent->content, 80) !!}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.aboutus.edit', $aboutuscontent->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.aboutus.destroy', $aboutuscontent->id) }}" method="POST" class="d-inline">
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
</div>
@endsection
