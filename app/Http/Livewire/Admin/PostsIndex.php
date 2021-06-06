<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
class PostsIndex extends Component
{
    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)->latest('id')->paginate(10);
        return view('livewire.admin.posts-index', compact('posts'));
    }
}
