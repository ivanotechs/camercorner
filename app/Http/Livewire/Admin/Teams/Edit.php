<?php

namespace App\Http\Livewire\Admin\Teams;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Teams;
use Illuminate\Contracts\Validation\Validator;
class Edit extends Component
{
    use WithFileUploads;

    public $showModal = false;

    public $isEditMode = false;

    public ?Teams $teams = null;

    public $image = null;



    public $name = "";

    public $description = "";


    protected $listeners = [
        'load'=>'load'
    ];

    public function load(?Teams $teams){
        $this->teams = $teams;
        if(isset($this->teams) && $this->teams->exists){
            $this->isEditMode = true;
            $this->name = $teams->name;
            $this->description = $teams->description;
        }else{
            $this->isEditMode = false;
        }
        $this->showModal = true;
    }

    public function render()
    {
        return view('livewire.admin.teams.edit')->layout('admin.layouts.app');
    }

    protected $rules = [
        "name" => 'required',
        "description" => 'required',

    ];

    public function save(){
        $data = $this->withValidator(function (\Illuminate\Validation\Validator $validator) {
            $validator->after(function (Validator $validator) {
                if(!$this->isEditMode && !isset($this->image)){
                    $validator->errors()->add('image', 'The Image field is required.');
                    return;
                }
            });

        })->validate();


        if($this->isEditMode){
            if(isset($this->image)){
                $data["image"] = str_replace('public/', '', $this->image->store('public/images'));
                unlink('storage/'. $this->teams->image);
            }
            $this->teams->update($data);
            $this->emit("success", " updated successfully!");

        }else{
            $data["image"] = str_replace('public/', '', $this->image->store('public/images'));
            $this->teams->create($data);
            $this->emit("success", " created successfully!");
        }
        $this->emit("teamsCreated");
        $this->showModal = false;
    }


    public function updatedShowModal($value){
        if(!$value){
            $this->name= " ";
            unset($this->image);
            $this->description= " ";
        }
    }
}

