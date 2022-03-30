<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;

class Posts extends Component
{

    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Article::where('postId', $this->itemId)->delete();
    }

    public function deleteDo() {
        Article::where('postId', $this->itemId)->delete();
    }

    public function render()
    {
        return view('livewire.posts', [
            "posts" => Article::where('status', 1)->get()
        ]);
    }
}
