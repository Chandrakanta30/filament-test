<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post title...';

    public function mount($title = null)
    {
        $this->title = $title;
    }
    public function save() 
    {
        $post = Post::create([
            'title' => $this->title
        ]);
 
        return redirect()->to('/posts')
             ->with('status', 'Post created!');
    }
    
    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.create-post');
    }
}
