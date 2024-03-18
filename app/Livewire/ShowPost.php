<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPost extends Component
{
    public Post $post;
 
    public function mount(Post $post) 
    {
        $this->post = $post;
    }
 
    public function render()
    {
        return view('livewire.show-post');
    }
}
