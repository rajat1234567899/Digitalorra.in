@extends('admin.dashboard')
@section('content')
<h2>Courses</h2>
<a href="{{ route('admin.courses.create') }}" class="btn btn-primary">Add Course</a>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Name</th>
        
        <th>Actions</th>
    </tr>
    @foreach ($courses as $course)
    <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->name }}</td>
        <td>{{ $course->description }}</td>
        <td>
            <a href="{{ route('admin.courses.edit', $course->id) }}">Edit</a>
            <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection