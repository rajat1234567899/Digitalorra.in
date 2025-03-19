<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Ensure you have a 'home.blade.php' in the resources/views folder
    }
    public function home() {
        $teams = Team::latest()->get();
        return view('frontend.team', compact('teams'));
    }

public function blogs() {
    $featuredBlogs = Blog::where('is_featured', true)->latest()->limit(3)->get();
    return view('frontend.blogsection', compact('featuredBlogs'));
}
}
