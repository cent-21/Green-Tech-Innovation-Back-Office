<?php

namespace App\Http\Livewire;

use App\Models\Direction;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamAdd extends Component
{
    use WithFileUploads;

    public $teamName;
    public $teamDetail;
    public $teamImage;
    public $teamPost;
    public $teamMail;
    public $teamTel;
    public $directionId;
    public $directionName;

    public function addDirection() {
        Direction::create(['directionName' => $this->directionName]);
        $this->directionName = "";
        session()->flash("message_direction", "L'équipe est déjà ajoutée");
    }


    public function addTeam() {
        $url = "";
        if(!empty($this->teamImage)) {
            $url = "storage/".$this->teamImage->store('teamImages', "public");
        }

       Team::create(['teamName' => $this->teamName, 'teamTel' => $this->teamTel, 'teamMail' => $this->teamMail, "teamImage" => $url, "teamDetail" => $this->teamDetail, "directionId" => $this->directionId, "teamPost" => $this->teamPost]);

        $this->teamName = "";
        $this->teamDetail = "";
        $this->directionId = "";
        $this->teamTel = "";
        $this->teamMail = "";
        $this->teamPost = "";
        session()->flash("message", "Le membre est déjà ajouté");
    }

    public function render()
    {
        return view('livewire.team-add', [
            "directions" => Direction::all()
        ]);
    }
}
