<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{

    public $title;
    public $content;
    public $completed = false;

    // Define validation rules
    protected $rules = [
        'title' => 'required|min:3|max:50',
        'content' => 'required|min:3|max:250',
    ];

    public function submit()
    {
        // Validate the input fields
        $this->validate();
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        // Proceed with other logic, like saving to the database
        $post = Posts::create([

            'title' => $this->title,
            'content' => $this->content,
            'completed' => $this->completed
        ]);
        if ($post) {
            session()->flash('message', 'Note created successfully!');
        } else {
            session()->flash('message', 'Note not created!');
        }
        return Redirect::route('home');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
