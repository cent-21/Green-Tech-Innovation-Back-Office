<?php

namespace App\Http\Livewire;

use App\Models\Service as ModelsService;
use Livewire\Component;
use Livewire\WithFileUploads;

class Service extends Component
{
    use WithFileUploads;


    public $serviceId;
    public $serviceName;
    public $serviceList;
    public $title;
    public $serviceImage;

    public function mount($serviceId) {
        $this->serviceId = $serviceId;
        $service = ModelsService::where('serviceId', $serviceId)->first();
        $this->serviceName = $service['serviceName'];
        $this->serviceList = $service['serviceList'];
    }

    public function editService() {
        $url = "";
        if(!empty($this->serviceImage)) {
            $url = "storage/".$this->serviceImage->store('serviceImages', "public");
            ModelsService::where('serviceId', $this->serviceId)->update(["serviceImage" => $url]);
        }

        ModelsService::where('serviceId', $this->serviceId)->update(['serviceName' => $this->serviceName, "serviceList" => $this->serviceList]);

        session()->flash("message", "Le service a été bien modifié");
    }

    public function render()
    {
        return view('livewire.service');
    }
}
