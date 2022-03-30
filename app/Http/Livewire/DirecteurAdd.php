<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Directeur;
use Livewire\Component;
use Livewire\WithFileUploads;

class DirecteurAdd extends Component
{
    use WithFileUploads;

    public $directeurName;
    public $directeurId;
    public $directeurImage;
    public $directeurCountry;



    public function addDirecteur() {
        $url = "";
        if(!empty($this->directeurImage)) {
            $url = "storage/".$this->directeurImage->store('directeurImages', "public");
        }
        Directeur::create(['directeurImage' => $url, 'directeurName' => $this->directeurName, 'directeurCountry' => $this->directeurCountry]);

        session()->flash("message", "Le directeur a été bien ajouté");

        $this->directeurName = null;
        $this->directeurImage = null;
        $this->directeurCountry = null;
    }

    public function render()
    {
        return view('livewire.directeur-add', [
            'countries' => Country::where("countryId", ">", 1)->orderBy('countryName')->get()
        ]);
    }
}
