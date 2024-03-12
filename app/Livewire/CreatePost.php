<?php

namespace App\Livewire;
use Illuminate\Support\Str;
use App\Models\Post;

use Livewire\Component;

class CreatePost extends Component
{
    public $title;
    public $content;

    public function save()
    {
        $post = Post::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content
        ]);

        return redirect()->to('/posts')
            ->with('status', 'Post created!');
    }

    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => 'Emil Tamayo',
        ]);
    }
}
