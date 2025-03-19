<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\AboutContentController;
use App\Http\Controllers\Admin\SeoSettingController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\StudentFrontendController;
use App\Http\Controllers\ProfileController;

// ================== Public Routes ==================

// Home Page
Route::get('/', function () {
    return view('index');
})->name('home');

// Static Pages
Route::get('/about-us', function () {
    return view('about-us');
})->name('about');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');

// Authentication Routes
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

// ================== Admin Routes (Protected by Auth) ==================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Resources
    Route::resource('teams', TeamController::class);
    Route::resource('courses', CourseController::class);  
    Route::resource('gallery', GalleryController::class);
    Route::resource('students', AdminStudentController::class);

    // Content Management
    Route::get('/contents', [ContentController::class, 'index'])->name('contents.index');
    Route::get('/contents/create', [ContentController::class, 'create'])->name('contents.create');
    Route::post('/contents/store', [ContentController::class, 'store'])->name('contents.store');
    Route::get('/contents/{id}/edit', [ContentController::class, 'edit'])->name('contents.edit');
    Route::post('/contents/{id}/update', [ContentController::class, 'update'])->name('contents.update');
    Route::delete('/contents/{id}/destroy', [ContentController::class, 'destroy'])->name('contents.destroy');

    // About Us Content
    Route::get('/aboutus', [AboutContentController::class, 'index'])->name('aboutus.index');
    Route::get('/aboutus/create', [AboutContentController::class, 'create'])->name('aboutus.create');
    Route::post('/aboutus/store', [AboutContentController::class, 'store'])->name('aboutus.store');
    Route::get('/aboutus/{id}/edit', [AboutContentController::class, 'edit'])->name('aboutus.edit');
    Route::put('/aboutus/{id}/update', [AboutContentController::class, 'update'])->name('aboutus.update');
    Route::delete('/aboutus/{id}/destroy', [AboutContentController::class, 'destroy'])->name('aboutus.destroy');

    // SEO Settings
    Route::get('/seo', [SeoSettingController::class, 'index'])->name('seo.index');
    Route::get('/seo/create', [SeoSettingController::class, 'create'])->name('seo.create');
    Route::post('/seo/store', [SeoSettingController::class, 'store'])->name('seo.store');
    Route::get('/seo/{id}/edit', [SeoSettingController::class, 'edit'])->name('seo.edit');
    Route::post('/seo/{id}/update', [SeoSettingController::class, 'update'])->name('seo.update');
    Route::delete('/seo/{id}/destroy', [SeoSettingController::class, 'destroy'])->name('seo.destroy');

    // Blog Management (Avoids naming conflict)
    Route::resource('blogs', BlogController::class)->names([
        'show' => 'admin.blogs.show'
    ]);
});

// ================== Profile Routes ==================
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

// ================== Blog Routes (Frontend) ==================
Route::get('/blogs', [BlogController::class, 'showAllBlogs'])->name('blogs.list');
Route::get('/blogs/{slug}', [BlogController::class, 'showBlog'])->name('blogs.single'); // ✅ Fixed Conflict

// ================== Student Routes (Frontend) ==================
Route::get('/students', [StudentFrontendController::class, 'index'])->name('students.list');
Route::get('/students/{student}', [StudentFrontendController::class, 'show'])->name('students.profile');

// ================== 404 Fallback ==================
Route::fallback(function () {
    return view('errors.404');
});
