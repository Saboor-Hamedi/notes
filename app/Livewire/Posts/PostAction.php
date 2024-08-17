<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostAction extends Component
{
    public $postId;
    public function modify()
    {
        // Perform the redirection to the edit page
        return redirect()->route('posts.edit', ['post' => $this->postId]);
    }

    public function show()
    {
        // Perform the redirection to the show page
        return redirect()->route('posts.show', ['post' => $this->postId]);
    }
    public function render()
    {
        return view('livewire.posts.post-action');
    }
}
