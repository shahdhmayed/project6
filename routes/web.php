<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostCommentController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/index', function () {
//     return view('index');


// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/category', function () {
//     return view('category');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get('/single-post', function () {
//     return view('single-post');
// });
// Route::get('/starter-page', function () {
//     return view('starter-page');
// });
Route::get('/', [PostController::class, 'index'])->name('home');

// single post
//
Route::get('/posts', [PostController::class, 'index'])->name('post.index'); 
Route::get('/posts/{id}', [PostController::class, 'singlePost'])->name('posts.show');
Route::post('/posts/{postid}/comment', [PostCommentController::class, 'store'])->name('posts.comment');



// category
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/{categoryid}', [CategoryController::class, 'show'])->name('categories.show');


// contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// الصفحات الثابتة اللي لسه مش محتاجة controllers
Route::view('/about', 'about');
Route::view('/starter-page', 'starter-page');
Route::view('/category', 'category');