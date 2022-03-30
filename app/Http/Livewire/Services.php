<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{
    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Service::where('serviceId', $this->itemId)->delete();
    }

    public function deleteDo() {
        Service::where('serviceId', $this->itemId)->delete();
    }

    public function render()
    {
        return view('livewire.services', [
            "services" => Service::all()
        ]);
    }
}
