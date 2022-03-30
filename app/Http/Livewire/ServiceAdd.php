<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceAdd extends Component
{
    use WithFileUploads;

    public $serviceName;
    public $serviceImage;
    public $serviceList;

    public function addService() {
        $url = "";
        if(!empty($this->serviceImage)) {
            $url = "storage/".$this->serviceImage->store('serviceImages', "public");
        }

       Service::create(['serviceName' => $this->serviceName, "serviceImage" => $url, "serviceList" => $this->serviceList]);

        $this->serviceName = "";
        $this->serviceList = "";
        session()->flash("message", "Le service est déjà ajouté");
    }

    public function render()
    {
        return view('livewire.service-add');
    }
}
