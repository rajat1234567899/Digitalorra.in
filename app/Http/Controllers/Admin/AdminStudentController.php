<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'registration_no' => 'required|unique:students',
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'phone' => 'required',
            'branch' => 'required',
            'registration_date' => 'required|date',
            'course_completion_date' => 'nullable|date',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg|max:100000',
            'certificate' => 'nullable|mimes:pdf|max:100000'
        ]);

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profiles', 'public');
        }
        if ($request->hasFile('certificate')) {
            $data['certificate'] = $request->file('certificate')->store('certificates', 'public');
        }

        Student::create($data);

        return redirect()->route('admin.students.index')->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'phone' => 'required',
            'branch' => 'required',
            'registration_date' => 'required|date',
            'course_completion_date' => 'nullable|date',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg|max:100000',
            'certificate' => 'nullable|mimes:pdf|max:100000'
        ]);

        if ($request->hasFile('profile_picture')) {
            if ($student->profile_picture) {
                Storage::disk('public')->delete($student->profile_picture);
            }
            $data['profile_picture'] = $request->file('profile_picture')->store('profiles', 'public');
        }

        if ($request->hasFile('certificate')) {
            if ($student->certificate) {
                Storage::disk('public')->delete($student->certificate);
            }
            $data['certificate'] = $request->file('certificate')->store('certificates', 'public');
        }

        $student->update($data);

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        if ($student->profile_picture) {
            Storage::disk('public')->delete($student->profile_picture);
        }
        if ($student->certificate) {
            Storage::disk('public')->delete($student->certificate);
        }

        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully!');
    }
}
