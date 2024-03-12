<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Post;


class UpdatePost extends Component
{

    public $post;
    public $title;
    public $slug;
    public $content;

    public function mount(Post $post)
    {
        $this->post = $post;
        $this->title = $this->post->title;
        $this->slug = $this->post->slug;
        $this->content = $this->post->content;
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required|string|max:255|unique:posts,title,' . $this->post->id,
            'content' => 'required|string',
        ]);

        $this->post->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content
        ]);

        session()->flash('message', 'Post updated successfully.');

        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.update-post');
    }
}
