<?php

namespace App\Livewire;

use App\Models\Posts;
use Livewire\Component;

class SearchBar extends Component
{
    public $searchTerm = '';
    public $selectedPostId = null;
    public $posts = [];

    protected $rules = [
        'searchTerm' => 'nullable|string|min:1',
    ];

    public function render()
    {
        if ($this->searchTerm) {
            $this->posts = Posts::where('title', 'like', '%' . $this->searchTerm . '%')->limit(5)->get();
        } else {
            $this->posts = [];
        }

        return view('livewire.search-bar');
    }

    public function clearSearch()
    {
        $this->searchTerm = '';
        $this->posts = [];
    }

    public function viewPost($id)
    {
        if (empty($this->searchTerm)) {
            session()->flash('message', 'Please enter a search term.');
            return;
        }

        return redirect()->route('posts.show', ['post' => $id]);
    }

    public function selectFirstResult()
    {
        if (!empty($this->posts)) {
            // Access the first item as an array
            $this->viewPost($this->posts[0]['id']);
        }
    }
}
