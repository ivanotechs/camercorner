<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Service;

class ServiceDetail extends Component
{
    protected $services;
    protected $checking;
    public $serviceId;

    public function mount($id)
    {
        $this->serviceId = $id;
        $this->checking = Service::findOrFail($id);
        $this->services = Service::all();
    }

    // public function mount()
    // {
    //     $this->services = Service::all();
    // }
    public function render()
    {
        return view('livewire.web.service-detail',[
            'services'=>$this->services,
            'checking'=>$this->checking,
        ]);
    }
}
