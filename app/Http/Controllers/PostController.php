<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function show($id)
    {
        $post = Posts::findOrFail($id);

        // Check if the user is authenticated and is the owner of the post
        if (Auth::check() && Auth::id() !== $post->user_id) {
            return redirect()->route('posts.index')->with('error', 'Unauthorized access to this post.');
        }

        // Pass the post to the view
        return view('posts.show', ['id' => $id, 'post' => $post]);
    }
    public function edit($id)
    {
        return view('posts.edit', ['id' => $id]);
    }
}
