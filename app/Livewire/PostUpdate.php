<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Livewire\Forms\PostForm;

class PostUpdate extends Component
{
    public Post $post;
    public PostForm $form;

    // public string $title = '';
    // public string $body = '';

    public function mount(Post $post)
    {
        $this->form->setThePost($post);

        // $this->title = $this->post->title;
        // $this->body = $this->post->body;
    }

    public function submit()
    {
        // dd('tete');
        $this->form->update();
        // $this->post->update([
        //     'title' => $this->title,
        //     'body' => $this->body
        // ]);

        $this->dispatch('updating', false);



    }

    public function render()
    {
        return view('livewire.post-update');
    }
}
