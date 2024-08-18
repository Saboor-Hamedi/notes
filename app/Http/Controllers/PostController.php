<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    use AuthorizesRequests;

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
        return view('posts.show', ['id' => $id]);
    }
    public function edit($id)
    {
        return view('posts.edit', ['id' => $id]);
    }
}
