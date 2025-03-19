@extends('admin.dashboard')
@section('content')
<h2>Add Course</h2>
<form action="{{ route('admin.courses.store') }}" method="POST">
    @csrf
    
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Description:</label>
    <textarea name="description"></textarea>
    <button type="submit">Save</button>
</form>
@endsection