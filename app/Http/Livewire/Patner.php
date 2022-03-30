<?php

namespace App\Http\Livewire;

use App\Models\Patner as ModelsPatner;
use Livewire\Component;
use Livewire\WithFileUploads;

class Patner extends Component
{
    use WithFileUploads;

    public $patnerName;
    public $patnerLogo;
    public $patnerLink;
    public $patnerId;

    public function mount($patnerId) {
        $this->patnerId = $patnerId;
        $patner = ModelsPatner::where('patnerId', $patnerId)->first();
        $this->patnerName = $patner->patnerName;
        $this->patnerLink = $patner->patnerLink;
    }

    public function editPatner() {
        $url = "";
        if(!empty($this->patnerLogo)) {
            $url = "storage/".$this->patnerLogo->store('patnerLogos', "public");
            ModelsPatner::where('patnerId', $this->patnerId)->update(["patnerLogo" => $url]);
        }

        ModelsPatner::where('patnerId', $this->patnerId)->update(["patnerLink" => $this->patnerLink, "patnerName" => $this->patnerName]);

        session()->flash("message", "Le parténaire est déjà modifié.");
    }

    public function render()
    {
        return view('livewire.patner');
    }
}
