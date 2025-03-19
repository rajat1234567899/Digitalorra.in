@extends('admin.dashboard')


@section('content')
<h1>Content</h1>

<a href="{{ route('admin.contents.create') }}">Add New Section</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table>
    <tr>
        <th>Section</th>
        <th>Content</th>
        <th>Actions</th>
    </tr>
    @foreach($contents as $content)
    <tr>
        <td>{{ ucfirst($content->section) }}</td>
        <td>{!! Str::limit($content->content, 50) !!}</td>
        <td>
            <a href="{{ route('admin.contents.edit', $content->id) }}">Edit</a> |
            <form action="{{ route('admin.contents.destroy', $content->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
