<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Directeur as ModelsDirecteur;
use Livewire\Component;
use Livewire\WithFileUploads;

class Directeur extends Component
{

    use WithFileUploads;

    public $directeurName;
    public $directeurId;
    public $directeurImage;
    public $directeurCountry;


    public function mount($directeurId) {
        $directeur = ModelsDirecteur::where('directeurId', $directeurId)->first();
        $this->directeurId = $directeur->directeurId;
        $this->directeurName = $directeur->directeurName;
        $this->directeurCountry = $directeur->directeurCountry;
    }


    public function editDirecteur() {
        $url = "";
        if(!empty($this->directeurImage)) {
            $url = "storage/".$this->directeurImage->store('directeurImages', "public");
            ModelsDirecteur::where('directeurId', $this->directeurId)->update(['directeurName' => $this->directeurName, 'directeurCountry' => $this->directeurCountry, 'directeurImage' => $url]);
        } else {
            ModelsDirecteur::where('directeurId', $this->directeurId)->update(['directeurName' => $this->directeurName, 'directeurCountry' => $this->directeurCountry]);
        }


        session()->flash("message", "Le directeur a été bien modifié");
    }

    public function render()
    {
        return view('livewire.directeur', [
            'countries' => Country::where("countryId", ">", 1)->orderBy('countryName')->get()
        ]);
    }
}
