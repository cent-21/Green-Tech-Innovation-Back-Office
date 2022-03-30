<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Teams extends Component
{

    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Team::where('teamId', $this->itemId)->delete();
    }

    public function deleteDo() {
        Team::where('teamId', $this->itemId)->delete();
    }

    public function render()
    {
        return view('livewire.teams', [
            "teams" => DB::table('teams')->join('directions', 'teams.directionId', '=', 'directions.directionId')->get()
        ]);
    }
}
