<?php

namespace App\Livewire;

use App\Models\Posts;
use Illuminate\Support\Collection;

use Livewire\Component;

class SearchBar extends Component
{
    public $searchTerm = '';
    public $posts = []; // Initialize as an empty array


    public function render()
    {

        if ($this->searchTerm) {
            $this->posts = Posts::where('title', 'like', '%' . $this->searchTerm . '%')->limit(5)->get();
        } else {
            $this->posts = []; // No posts to show if no search term
        }

        return view('livewire.search-bar');
    }
    public function clearSearch()
    {
        $this->searchTerm = '';
        $this->posts = [];
    }

    public function updateSearch()
    {
        if (empty($this->searchTerm)) {
            $this->posts = [];
        }
    }
}
