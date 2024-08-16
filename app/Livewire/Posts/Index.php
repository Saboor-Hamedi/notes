<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $posts = Posts::latest()->simplePaginate(3);
        return view('livewire.posts.index', ['posts' => $posts]);
    }
}
