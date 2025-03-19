@extends('admin.dashboard')

@section('content')
<div>
    <form action="{{ route('admin.achievements.update', $achievement) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Title</label>
    <input type="text" name="title" value="{{ $achievement->title }}" required>

    <label>Name</label>
    <input type="text" name="name" value="{{ $achievement->name }}" required>

    <label>Work Profile</label>
    <input type="text" name="work_profile" value="{{ $achievement->work_profile }}" required>

    <label>Joining Date</label>
    <input type="date" name="joining_date" value="{{ $achievement->joining_date }}" required>

    <label>Image</label>
    <input type="file" name="image">
    <img src="{{ asset($achievement->image) }}" width="100">

    <label>Year</label>
    <input type="text" name="year" value="{{ $achievement->year }}" required>

    <button type="submit">Update</button>
</form>
</div>
@endsection
