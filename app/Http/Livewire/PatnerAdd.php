<?php

namespace App\Http\Livewire;

use App\Models\Patner;
use Livewire\Component;
use Livewire\WithFileUploads;

class PatnerAdd extends Component
{
    use WithFileUploads;

    public $patnerName;
    public $patnerLogo;
    public $patnerLink;

    public function addPatner() {
        $url = "";
        if(!empty($this->patnerLogo)) {
            $url = "storage/".$this->patnerLogo->store('patnerLogos', "public");
        }

        Patner::create(["patnerLink" => $this->patnerLink, "patnerLogo" => $url,
                        "patnerName" => $this->patnerName]);

        $this->patnerLink = "";
        $this->patnerName = null;
        $this->patnerLogo = null;


        session()->flash("message", "Votre partenaire a été bien ajouté");
    }

    public function render()
    {
        return view('livewire.patner-add');
    }
}
