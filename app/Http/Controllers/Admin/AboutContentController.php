<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutuscontents; // ✅ Ensure this is correctly imported

class AboutContentController extends Controller
{
    /**
     * Display a listing of the about us sections.
     */
    public function index() {
        $aboutuscontents = Aboutuscontents::all();
        return view('admin.aboutus.index', compact('aboutuscontents'));
    }

    /**
     * Show the form for creating a new about us section.
     */
    public function create() {
        return view('admin.aboutus.create');
    }

    /**
     * Store a newly created about us section in the database.
     */
    public function store(Request $request) {
        $request->validate([
            'section' => 'required|unique:aboutuscontents,section',
            'content' => 'required|string'
        ]);

        Aboutuscontents::create([
            'section' => $request->section,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.aboutus.index')->with('success', 'Content section added successfully.');
    }

    /**
     * Show the form for editing a specific about us section.
     */
    public function edit($id) {
        $content = Aboutuscontents::findOrFail($id); // ✅ Fixed model reference
        return view('admin.aboutus.edit', compact('content'));
    }

    /**
     * Update the specified about us section in the database.
     */
    public function update(Request $request, $id) {
        $content = Aboutuscontents::findOrFail($id); // ✅ Fixed incorrect model name

        $request->validate([
            'content' => 'required|string'
        ]);

        $content->update([
            'content' => $request->input('content')
        ]);

        return redirect()->route('admin.aboutus.index')->with('success', 'Content updated successfully!');
    }

    /**
     * Remove the specified about us section from the database.
     */
    public function destroy($id) {
        Aboutuscontents::findOrFail($id)->delete();
        return redirect()->route('admin.aboutus.index')->with('success', 'Content deleted successfully.');
    }
}
