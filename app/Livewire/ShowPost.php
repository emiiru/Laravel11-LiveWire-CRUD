<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;

class ShowPost extends Component
{

    public $post;

    public function mount(Post $post)
    {
    }

    public function render()
    {
        return view('livewire.show-post');
    }
}
