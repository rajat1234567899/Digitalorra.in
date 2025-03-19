@extends('admin.dashboard')

@section('content')
<h2>Students List</h2>
<a href="{{ route('admin.students.create') }}">Add New Student</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Registration No.</th>
        <th>Name</th>
        <th>Branch</th>
        <th>Profile</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ $student->registration_no }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->branch }}</td>
        <td>
            @if($student->profile_picture)
                <img src="{{ asset('storage/'.$student->profile_picture) }}" width="50">
            @else
                No Image
            @endif
        </td>
        <td>
            <a href="{{ route('admin.students.edit', $student->id) }}">Edit</a>
            <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
