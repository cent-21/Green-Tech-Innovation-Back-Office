<?php

namespace App\Http\Livewire;

use App\Models\Reazisation;
use Livewire\Component;

use Illuminate\Support\Str;

class Project extends Component
{

    public $reazisationName;
    public $reazisationLink;
    public $reazisationDetail;
    public $reazisationId;

    public function mount($projectId) {
        $this->reazisationId = $projectId;
        $reazisation = Reazisation::where('reazisationId', $projectId)->first();
        $this->reazisationName = $reazisation['reazisationName'];
        $this->reazisationDetail = $reazisation['reazisationDetail'];
        $this->reazisationLink = $reazisation['reazisationLink'];
    }

    public function editProject() {
        Reazisation::where('reazisationId', $this->reazisationId)->update(['reazisationName' => $this->reazisationName, 'reazisationLink' => $this->reazisationLink, 'reazisationDetail' => $this->reazisationDetail]);

        session()->flash("message", "Le projet a été bien modifié.");
    }


    public function render()
    {
        return view('livewire.project');
    }
}
