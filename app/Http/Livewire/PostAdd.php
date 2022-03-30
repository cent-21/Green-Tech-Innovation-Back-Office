<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Str;

class PostAdd extends Component
{
    use WithFileUploads;

    public $postTitle;
    public $postImage;
    public $postDescription;
    public $postSlug;
    public $showPage = true;


    public function addArticle() {
        $url = "";
        if(!empty($this->postImage)) {
            $url = "storage/".$this->postImage->store('postImages', "public");
        }

        if(!empty($this->postDescription) && !empty($this->postTitle)) {
            $this->postSlug = Str::slug($this->postTitle);

            if(!empty($url)) {
                Article::create(["postTitle" => $this->postTitle, "postImage" => $url,
                        "postDescription" => $this->postDescription, "postSlug" => $this->postSlug]);
            } else {
                Article::create(["postTitle" => $this->postTitle, "postDescription" => $this->postDescription, "postSlug" => $this->postSlug]);
            }

            $this->postTitle = "";
            $this->postImage = "";
            $this->postDescription = "";

            $this->showPage = false;

            session()->flash("message", "Votre article a été bien ajouté");
        }
    }


    public function render()
    {
        return view('livewire.post-add');
    }
}
