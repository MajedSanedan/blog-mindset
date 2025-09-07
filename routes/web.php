<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('posts.index',compact('posts'));
})->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
      $posts = Post::all();
    return view('posts.index',compact('posts'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/post/{post}',[PostController::class,'show'])->name('post.show');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','admin'])->group(function () {

 Route::get('/admin', function () {
    return view('admin.index'); })->name('admin.dashboard');

Route::get('/admin/category/index', [CategoryController::class,'index'])->name('admin.categories.index');
Route::get('/admin/category/create', [CategoryController::class,'create'])->name('admin.categories.create');
Route::post('/admin/category', [CategoryController::class,'store'])->name('admin.categories.store');
Route::get('/admin/category/edit/{category}', [CategoryController::class,'edit'])->name('admin.categories.edit');
Route::post('/admin/category/update/{category}', [CategoryController::class,'update'])->name('admin.categories.update');
Route::delete('/admin/category/delete/{category}', [CategoryController::class,'destroy'])->name('admin.categories.destroy');

Route::get('/admin/post/index', [PostController::class,'index'])->name('admin.posts.index');
Route::get('/admin/post/create', [PostController::class,'create'])->name('admin.posts.create');
Route::post('/admin/post', [PostController::class,'store'])->name('admin.posts.store');
Route::get('/admin/post/edit/{post}', [PostController::class,'edit'])->name('admin.posts.edit');
Route::post('/admin/post/update/{post}', [PostController::class,'update'])->name('admin.posts.update');
Route::delete('/admin/post/delete/{post}', [PostController::class,'destroy'])->name('admin.posts.destroy');
});
