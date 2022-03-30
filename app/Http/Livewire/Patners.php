<?php

namespace App\Http\Livewire;

use App\Models\Patner;
use Livewire\Component;

class Patners extends Component
{

    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Patner::where('patnerId', $this->itemId)->delete();
    }

    public function deleteDo() {
        Patner::where('patnerId', $this->itemId)->delete();
    }


    public function render()
    {
        return view('livewire.patners', [
            "patners" => Patner::where('status', 1)->get()
        ]);
    }
}
