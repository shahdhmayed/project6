<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostComment;

class PostCommentController extends Controller
{
    public function store(Request $request, $postid)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|url|max:255',
            'comment' => 'required|string',
        ]);

        PostComment::create([
            'postid' => $postid,
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'comment' => $request->comment,
        ]);

        
        return redirect()->back()->with('success', 'Comment submitted successfully!');
    }
}