<?php

namespace App\Livewire\Dashboard;

use App\Models\Posts as ModelsPosts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {

        $posts = ModelsPosts::with('user')->where('user_id', Auth::user()->id)->simplePaginate(3);

        return view('livewire.dashboard.posts', ['posts' => $posts]);
    }
}
