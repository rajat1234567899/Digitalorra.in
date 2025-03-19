@extends('admin.dashboard')

@section('content')
<div>
<a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Add Achievements</a>

<table border="1">
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Work Profile</th>
        <th>Joining Date</th>
        <th>Title</th>
        <th>Year</th>
        <th>Actions</th>
    </tr>
    @foreach ($achievements as $achievement)
    <tr>
        <td>{{ $achievement->title }}</td>
        <td>{{ $achievement->name }}</td>
        <td>{{ $achievement->work_profile }}</td>
        <td>{{ $achievement->joining_date }}</td>
        <td>{{ $achievement->year }}</td>
        <td>
            @if($achievement->image)
                <img src="{{ asset('storage/' . $achievement->image) }}" width="80" height="80" alt="Achievement Image">
            @else
                No Image
            @endif
        </td>
        <td>
            <a href="{{ route('admin.achievements.edit', $achievement->id) }}">Edit</a> |
            <form action="{{ route('admin.achievements.destroy', $achievement->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>
</div>
@endsection
