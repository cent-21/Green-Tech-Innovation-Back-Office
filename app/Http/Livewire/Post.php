<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class Post extends Component
{
    use WithFileUploads;

    public $postId;
    public $postTitle;
    public $postDescription;
    public $title;
    public $postImage;

    public function mount($id) {
        $this->postId = $id;
        $post = Article::where('postId', $id)->first();
        $this->postTitle = $post['postTitle'];
        $this->postDescription = $post['postDescription'];
    }

    public function editArticle() {
        $url = "";
        if(!empty($this->postImage)) {
            $url = "storage/".$this->postImage->store('postImages', "public");
            Article::where('postId', $this->postId)->update(["postImage" => $url]);
        }

        Article::where('postId', $this->postId)->update(['postTitle' => $this->postTitle, "postDescription" => $this->postDescription]);

        session()->flash("message", "L'article a été bien modifié");
    }

    public function render()
    {
        return view('livewire.post');
    }
}
