@extends('admin.dashboard')

@section('content')
<form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Title</label>
    <input type="text" name="title" required>

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Work Profile</label>
    <input type="text" name="work_profile" required>

    <label>Joining Date</label>
    <input type="date" name="joining_date" required>

    <label>Image</label>
    <input type="file" name="image" required>

    <label>Year</label>
    <input type="text" name="year" required>

    <button type="submit">Save</button>
</form>
@endsection
