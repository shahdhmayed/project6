<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // لو عندك علاقات (category) اكتبيها هنا عشان eager loading
        // $posts = Post::with('category')->latest()->paginate(6);
        // return view('index', compact('posts'));
        $posts = post::all();
        return view('index' , compact('posts'));
    }


    public function show($id) // أو: public function show(Post $post) { ... } لو هتستخدمي route model binding
    {
        // لو الـ primary key اسمه مختلف (مثلاً postid) استخدمي findOrFail بالاسم الصح
        $post = Post::with('category','comments')->findOrFail($id);
        return view('single-post', compact('post'));
    }

    public function singlePost($id)
{
    $post = Post::where('postid', $id)->firstOrFail();
    return view('single-post', compact('post'));
}
    
}

   
    
    

