<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index() {
        $contents = Content::all();
        return view('admin.contents.index', compact('contents'));
    }

    public function create() {
        return view('admin.contents.create');
    }

    public function store(Request $request) {
        $request->validate([
            'section' => 'required|unique:contents,section',
            'content' => 'required'
        ]);

        Content::create($request->all());

        return redirect()->route('admin.contents.index')->with('success', 'Content section added successfully.');
    }

    public function edit($id) {
        $content = Content::findOrFail($id);
        return view('admin.contents.edit', compact('content'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'content' => 'required'
        ]);

        $content = Content::findOrFail($id);
        $content->update(['content' => $request->content]);

        return redirect()->route('admin.contents.index')->with('success', 'Content updated successfully.');
    }

    public function destroy($id) {
        Content::findOrFail($id)->delete();
        return redirect()->route('admin.contents.index')->with('success', 'Content deleted successfully.');
    }
}
