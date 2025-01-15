<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Post;

class PostForm extends Form
{
    public ?Post $post;
    //
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $body = '';

    public function setThePost(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->body = $post->body;
    }

    public function update()
    {
        $this->post->update($this->all());
    }

    public function store()
    {
        $this->validate();
        auth()->user()->posts()->create($this->all());
        // $this->validate();
        // auth()->user()->posts()->create([
        //     'title' => $this->title,
        //     'body' => $this->body
        // ]);
        // dd($this->all());
    }
}
