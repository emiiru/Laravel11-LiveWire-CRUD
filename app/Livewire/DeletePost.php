<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Post;

class DeletePost extends Component
{

    public $postId;

    public function confirmDelete(Post $post)
    {
        $this->post = $post;
        $this->dispatchBrowserEvent('show-delete-modal');
    }

    public function deletePost()
    {
        $this->post->delete();
        session()->flash('message', 'Post deleted successfully.');
        $this->emit('postDeleted');
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}
