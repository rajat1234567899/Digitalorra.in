@extends('admin.dashboard')

@section('content')
<h2>Team Members</h2>
<a href="{{ route('admin.teams.create') }}" class="btn btn-primary">Add Team Member</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
            <tr>
                <td>{{ $team->id }}</td>
                <td><img src="{{ asset('storage/' . $team->image) }}" width="50"></td>
                <td>{{ $team->name }}</td>
                <td>{{ $team->position }}</td>
                <td>
                    <a href="{{ route('admin.teams.edit', $team->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.teams.destroy', $team->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
