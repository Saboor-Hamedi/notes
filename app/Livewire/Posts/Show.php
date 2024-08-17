<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Livewire\Component;

class Show extends Component
{

    public $post;

    public function mount($id)
    {
        $this->post = Posts::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.posts.show');
    }
}
