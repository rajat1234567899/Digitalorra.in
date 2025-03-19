<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
{
    $courses = Course::all(); // Fetch all courses from the database
    return view('admin.courses.index', compact('courses'));
}



    public function create()
    {
        return view('admin.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        Course::create($request->except('_token'));
        return redirect()->route('admin.courses.index')->with('success', 'Course Added!');
    }

    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate(['name' => 'required']);
        $course->update($request->except('_token'));
        return redirect()->route('admin.courses.index')->with('success', 'Course Updated!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')->with('success', 'Course Deleted!');
    }
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }
    
}