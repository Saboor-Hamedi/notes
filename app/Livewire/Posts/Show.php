<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    public $id;
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
