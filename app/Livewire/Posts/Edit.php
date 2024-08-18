<?php

namespace App\Livewire\Posts;

use App\Models\Posts;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Edit extends Component
{

    use AuthorizesRequests;
    public $title;
    public $content;
    public $completed = false;
    public $postId;
    // Define validation rules
    protected $rules = [
        'title' => 'required|min:3|max:100',
        'content' => 'required|min:3|max:250',
    ];

    public function mount($id)
    {
        $this->postId = $id;
        $post = Posts::findOrFail($id);
        // authorized 
        $this->authorize('update', $post);
        $this->title = $post->title;
        $this->content = $post->content;
        $this->completed = (bool) $post->completed;
    }

    public function update()
    {
        $this->validate();
        $post = Posts::findOrFail($this->postId);
        $this->authorize('update', $post);
        $data = [
            'title' => $this->title,
            'content' => $this->content,
            'completed' => $this->completed
        ];
        // Check if the post has been modified
        if (!$post->isModified($data)) {
            session()->flash('message', 'Note has not been modified');
            return Redirect::route('home');
        }

        $post->update($data);

        session()->flash('message', 'Note updated successfully');
        // Flash message and redirect

        return Redirect::route('home'); // Adjust the redirect route if necessary
    }

    public function render()
    {

        return view('livewire.posts.edit');
    }
}
