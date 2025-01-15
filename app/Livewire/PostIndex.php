<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Livewire\Forms\PostForm;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class PostIndex extends Component
{
    public PostForm $form;

    use WithPagination;

    // public $title = ""; 
    // public $description = ""; 

    public function create(Request $request)
    {
        $this->form->store();
        
        // $this->validate([
        //     'title' => 'required',
        //     'description' => 'required'
        // ]);

        // Auth::user()->posts()->create([
        //     'title' => $this->title,
        //     'body' => $this->description
        // ]);

        // $this->title = '';
        // $this->description = '';
    }

    // public function destroy($id)  
    // {
    //     // dd($id);
    //     Post::find($id)->delete();
    // }

    public function render()
    {
        $posts = Auth::user()->posts()->latest()->paginate(5);
        // $posts = Post::latest()->paginate(5);

        return view('livewire.post-index', compact('posts'));
    }
}
