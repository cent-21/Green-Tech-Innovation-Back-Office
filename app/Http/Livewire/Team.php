<?php

namespace App\Http\Livewire;

use App\Models\Direction;
use App\Models\Team as ModelsTeam;
use Livewire\Component;
use Livewire\WithFileUploads;

class Team extends Component
{

    use WithFileUploads;

    public $teamId;
    public $teamName;
    public $teamDetail;
    public $teamTel;
    public $teamMail;
    public $directionId;
    public $teamImage;
    public $teamPost;
    public $categoryName;

    public function mount($teamId) {
        $this->teamId = $teamId;
        $team = ModelsTeam::where('teamId', $teamId)->first();
        $this->teamName = $team['teamName'];
        $this->teamDetail = $team['teamDetail'];
        $this->teamPost = $team['teamPost'];
        $this->teamMail = $team['teamMail'];
        $this->teamTel = $team['teamTel'];
        $this->directionId = $team["directionId"];
    }

    public function editTeam() {
        $url = "";
        if(!empty($this->teamImage)) {
            $url = "storage/".$this->teamImage->store('teamImages', "public");
            ModelsTeam::where("teamId", $this->teamId)->update(["teamImage" => $url]);
        }
        ModelsTeam::where("teamId", $this->teamId)->update(['teamName' => $this->teamName, 'teamTel' => $this->teamTel, 'teamMail' => $this->teamMail, 'teamPost' => $this->teamPost, "teamDetail" => $this->teamDetail]);

        session()->flash("message", "Le membre est déjà modifié.");
    }




    public function render()
    {
        return view('livewire.team', [
            "directions" => Direction::all()
        ]);
    }
}
