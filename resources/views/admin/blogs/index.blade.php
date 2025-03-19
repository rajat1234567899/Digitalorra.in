@extends('admin.dashboard')

@section('content')
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->title }}</td>
                    <td><img src="{{ asset('storage/' . $blog->image) }}" width="50"></td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $blogs->links() }}
@endsection
