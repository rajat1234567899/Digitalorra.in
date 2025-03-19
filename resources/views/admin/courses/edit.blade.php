@extends('admin.dashboard')
@section('content')
<h2>Edit Course</h2>
<form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Name:</label>
    <input type="text" name="name" value="{{ $course->name }}" required>
    <label>Description:</label>
    <textarea name="description">{{ $course->description }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection