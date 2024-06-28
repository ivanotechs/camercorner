<?php

namespace App\Http\Livewire\Admin\Teams;

use App\Models\Teams;
use Livewire\Component;

class Delete extends Component
{
    public $showModal = false;
    public Teams $teams;

    protected $listeners = [
        'load'=>'load'
    ];


    public function render()
    {
        return view('livewire.admin.teams.delete')->layout('admin.layouts.app');
    }

    /**
     * @param Teams $teams
     */
    public function load(Teams $teams){
        $this->teams = $teams;
        $this->showModal = true;
    }

    public function delete(){
        unlink('storage/'.$this->teams->image);
        $this->teams->delete();
        $this->emit("success", "deleted successfully!");
        $this->emit("teamsDeleted");
        $this->showModal = false;
    }
}
