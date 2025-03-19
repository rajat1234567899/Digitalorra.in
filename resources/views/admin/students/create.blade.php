@extends('admin.dashboard')

@section('content')
<h2>Add Student</h2>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    Registration No: <input type="text" name="registration_no" required><br>
    Name: <input type="text" name="name" required><br>
    Father Name: <input type="text" name="father_name" required><br>
    Mother Name: <input type="text" name="mother_name" required><br>
    Phone: <input type="text" name="phone" required><br>
    Branch: <input type="text" name="branch" required><br>
    Registration Date: <input type="date" name="registration_date" required><br>
    Course Completion Date: <input type="date" name="course_completion_date"><br>
    Profile Picture: <input type="file" name="profile_picture"><br>
    Certificate: <input type="file" name="certificate"><br>
    <button type="submit">Submit</button>
</form>
@endsection
