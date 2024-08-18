<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public $post;
    public $isOwner;

    public function mount($id)
    {
        $this->post = Posts::findOrFail($id);
        $this->isOwner = Auth::check() && Auth::id() === $this->post->user_id;
        if (!$this->isOwner && !Auth::check()) {
            abort(403, 'Unauthorized action.');
        }
    }

    public function render()
    {
        return view('livewire.posts.show');
    }
}
