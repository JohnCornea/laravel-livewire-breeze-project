<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\User;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $title = ""; 
    public $description = ""; 

    public function create(Request $request)
    {
        Auth::user()->posts()->create([
            'title' => $this->title,
            'body' => $this->description
        ]);

        $this->title = '';
        $this->description = '';
    }

    public function destroy($id)  
    {
        // dd($id);
        Post::find($id)->delete();
    }

    public function render()
    {
        $posts = Post::latest()->paginate(10);

        return view('livewire.posts', compact('posts'));
    }
}
