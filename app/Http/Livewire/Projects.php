<?php

namespace App\Http\Livewire;

use App\Models\Reazisation;
use Livewire\Component;

class Projects extends Component
{

    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Reazisation::where('reazisationId', $this->itemId)->delete();
    }

    public function deleteDo() {
        Reazisation::where('reazisationId', $this->itemId)->delete();
    }

    public function render()
    {
        return view('livewire.projects', [
            "projects" => Reazisation::where("status", 1)->get()
        ]);
    }
}
