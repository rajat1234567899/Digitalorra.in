@extends('admin.dashboard')

@section('content')
<h2>Edit Team Member</h2>

<form action="{{ route('admin.teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $team->name }}" required>
    </div>

    <div class="form-group">
        <label>Position</label>
        <input type="text" name="position" class="form-control" value="{{ $team->position }}" required>
    </div>

    <div class="form-group">
        <label>Current Image</label><br>
        <img src="{{ asset('storage/' . $team->image) }}" width="100"><br><br>
        <input type="file" name="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
