<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostAction extends Component
{
    public $postId;
    public function modify()
    {
        // Redirect immediately
        return redirect()->away(route('posts.edit', ['post' => $this->postId]));
    }

    public function show()
    {
        // Redirect immediately
        return redirect()->away(route('posts.show', ['post' => $this->postId]));
    }
    public function render()
    {
        return view('livewire.posts.post-action');
    }
}
