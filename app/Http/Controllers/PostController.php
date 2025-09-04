<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        
        $posts = post::all();
        return view('index' , compact('posts'));
    }


    public function show($id)
    {
       
        $post = Post::with('category','comments')->findOrFail($id);
        return view('single-post', compact('post'));
    }

    public function singlePost($id)
{
    $post = Post::where('postid', $id)->firstOrFail();
    return view('single-post', compact('post'));
}
    
}

   
    
    

