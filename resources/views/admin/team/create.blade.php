@extends('admin.dashboard')

@section('content')
<h2>Add Team Member</h2>
<form action="{{ route('admin.teams.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Position:</label>
        <input type="text" name="position" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Image:</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
</form>
@endsection
