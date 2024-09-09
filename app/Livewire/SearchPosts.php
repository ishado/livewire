<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.posts.search', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->get(),
        ]);
    }
}
