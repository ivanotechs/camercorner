<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Contracts\Validation\Validator;

class Edit extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $isEditMode = false;

    public ?Service $service = null;

    public $image = null;
    public $icon = null;
    public $title = "";
    public $description = "";

    protected $listeners = [
        'load' => 'load'
    ];

    public function load(?Service $service)
    {
        $this->service = $service;
        if (isset($this->service) && $this->service->exists) {
            $this->isEditMode = true;
            $this->title = $service->title;
            $this->description = $service->description;
        } else {
            $this->isEditMode = false;
        }
        $this->showModal = true;
    }

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
        'icon' => 'nullable|image',
    ];

    public function save()
    {
        $data = $this->validate();

        if ($this->isEditMode) {
            if (isset($this->image)) {
                $data['image'] = str_replace('public/', '', $this->image->store('public/images'));
                try {
                    unlink(storage_path('storage/' . $this->service->image));
                } catch (\Exception $e) {
                }
            }
            if (isset($this->icon)) {
                $data['icon'] = str_replace('public/', '', $this->icon->store('public/icons'));
                try {
                    unlink(storage_path('storage/' . $this->service->icon));
                } catch (\Exception $e) {
                }
            }
            $this->service->update($data);
            $this->emit('success', 'Service updated successfully!');
        } else {
            if (isset($this->image)) {
                $data['image'] = str_replace('public/', '', $this->image->store('public/images'));
            }
            if (isset($this->icon)) {
                $data['icon'] = str_replace('public/', '', $this->icon->store('public/icons'));
            }
            Service::create($data);
            $this->emit('success', 'Service created successfully!');
        }

        $this->emit('serviceCreated');
        $this->showModal = false;
    }

    public function updatedShowModal($value)
    {
        if (!$value) {
            $this->title = "";
            $this->description = "";
        }
    }

    public function render()
    {
        return view('livewire.admin.services.edit')->layout('admin.layouts.app');
    }
}
