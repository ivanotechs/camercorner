<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Service;

class Home extends Component
{
    protected $services;

    public function mount()
    {
        $this->services = Service::all();
    }
    public function render()
    {
        return view('livewire.web.home',[
            'services'=>$this->services,
        ]);
    }
}
