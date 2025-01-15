<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Attributes\On;

class PostItem extends Component
{
    public Post $post;

    public bool $edit = false;

    #[On('updating')]
    public function updating(bool $updating)
    {
        $this->edit = $updating;
    }

    public function destroy()  
    {

        // dd($id);
        // $post = Post::find($id);

        $this->authorize('delete', $this->post);

        $this->post->delete();

        $this->dispatch('deleting');
    }

    public function render()
    {
        return view('livewire.post-item');
    }
}
