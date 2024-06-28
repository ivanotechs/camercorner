<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class Delete extends Component
{
    public $showModal = false;
    public Service $service;

    protected $listeners = [
        'load' => 'load'
    ];

    public function render()
    {
        return view('livewire.admin.services.delete')->layout('admin.layouts.app');
    }

    public function load(Service $service)
    {
        $this->service = $service;
        $this->showModal = true;
    }

    public function delete()
    {
        if (file_exists(storage_path('storage/' . $this->service->icon))) {
            unlink(storage_path('storage/' . $this->service->icon));
        }
        if (file_exists(storage_path('storage/' . $this->service->image))) {
            unlink(storage_path('storage/' . $this->service->image));
        }
        $this->service->delete();
        $this->emit('success', 'Service deleted successfully!');
        $this->emit('serviceDeleted');
        $this->showModal = false;
    }
}
