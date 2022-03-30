<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;
use Livewire\WithPagination;

class Newsletters extends Component
{
    use WithPagination;

    public $itemId;

    public function deleteIt($id) {
        $this->itemId = $id;
        Newsletter::where('newsletterId', $this->itemId)->delete();
    }

    public function render()
    {
        return view('livewire.newsletters', [
            "newsletters" => Newsletter::paginate(25)
        ]);
    }
}
