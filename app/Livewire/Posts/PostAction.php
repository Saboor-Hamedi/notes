<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostAction extends Component
{
    public $postId;
    public $isOwner = false;
    public function mount($postId)
    {
        $this->postId = $postId;
        $post = Posts::findOrFail($postId);
        $this->isOwner = Auth::check() && Auth::id() === $post->user_id;
    }

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
