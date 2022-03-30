<?php

namespace App\Http\Livewire;

use App\Models\Directeur;
use Livewire\Component;

class Directeurs extends Component
{

    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Directeur::where('directeurId', $this->itemId)->delete();
    }

    public function deleteDo() {
        Directeur::where('directeurId', $this->itemId)->delete();
    }

    public function render()
    {
        return view('livewire.directeurs', [
            "directeurs" => Directeur::all()
        ]);
    }
}
