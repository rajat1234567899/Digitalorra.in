@extends('admin.dashboard')

@section('content')
<h2>Edit Student</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $student->name }}" required><br>
    Father Name: <input type="text" name="father_name" value="{{ $student->father_name }}" required><br>
    Mother Name: <input type="text" name="mother_name" value="{{ $student->mother_name }}" required><br>
    Phone: <input type="text" name="phone" value="{{ $student->phone }}" required><br>
    Branch: <input type="text" name="branch" value="{{ $student->branch }}" required><br>
    Registration Date: <input type="date" name="registration_date" value="{{ $student->registration_date }}" required><br>
    Course Completion Date: <input type="date" name="course_completion_date" value="{{ $student->course_completion_date }}"><br>
    Profile Picture: <input type="file" name="profile_picture"><br>
    Certificate: <input type="file" name="certificate"><br>
    <button type="submit">Update</button>
</form>
@endsection
