<?php

namespace App\Http\Livewire;


use App\Models\Reazisation;
use Livewire\Component;

use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class ProjectAdd extends Component
{
    use WithFileUploads;

    public $reazisationName;
    public $reazisationLink;
    public $reazisationDetail;



    public function updated($value) {
        session()->forget('message');
    }


    public function addProject() {
        Reazisation::create(["reazisationName" => $this->reazisationName, "reazisationLink" => $this->reazisationLink,
                        "reazisationDetail" => $this->reazisationDetail]);

        $this->reazisationDetail = "";
        $this->reazisationName = "";
        $this->reazisationLink = "";


        session()->flash("message", "Votre projet a été bien ajouté");
    }


    public function render()
    {
        return view('livewire.project-add');
    }
}
