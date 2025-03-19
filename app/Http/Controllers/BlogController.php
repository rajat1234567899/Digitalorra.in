<?php


namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller {
    public function index() {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create() {
        return view('admin.blogs.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|unique:blogs|max:255',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
        ]);
    
        $imagePath = $request->hasFile('image') ? $request->file('image')->store('blogs', 'public') : null;
    
        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $imagePath,
            'is_featured' => $request->has('is_featured'),
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    

    public function edit(Blog $blog) {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog) {
        $request->validate([
            'title' => 'required|max:255|unique:blogs,title,' . $blog->id,
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'is_featured' => 'boolean',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->update(['image' => $imagePath]);
        }
    
        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'is_featured' => $request->has('is_featured'),
        ]);
    
        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }
    

    public function destroy(Blog $blog) {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully.');
    }
    public function showAllBlogs() {
        $blogs = Blog::latest()->paginate(10);
        return view('frontend.blogs.index', compact('blogs'));
    }
    
    public function showBlog($slug) {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('frontend.blogs.show', compact('blog'));
    }
    
    public function featuredBlogs() {
        $featuredBlogs = Blog::where('is_featured', true)->latest()->limit(3)->get();
        return view('frontend.partials.featured-blogs', compact('featuredBlogs'));
    }
    
}
