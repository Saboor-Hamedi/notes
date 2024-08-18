<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $posts = Posts::with('user')->latest()->simplePaginate(3);
        return view('livewire.posts.index', ['posts' => $posts,]);
    }
}
