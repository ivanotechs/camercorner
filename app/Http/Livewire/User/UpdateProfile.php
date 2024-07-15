<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProfile extends Component
{
    use WithFileUploads;
    public User $user;
    public $uploaded_image;
    public $name;
    public $shop_name;
    public $phone;
    public $email;
    public $profile;

    protected $rules = [
    ];

    public function mount(){
        $this->user = auth()->user();
        $this->profile = $this->user->profile;
        $this->name = $this->user->name;
        $this->shop_name = $this->user->shop_name;
        $this->phone = $this->user->phone;
        $this->email = $this->user->email;
    }

    public function save(){
        if(isset($this->profile) && isset($this->uploaded_profile)){
            unlink(storage_path('storage/' . $this->user->profile));
            $this->user->profile = $this->uploaded_image->store('images', 'public');
            $this->user->save();        
        }
        $this->user->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'shop_name' => $this->shop_name
        ]);
        $this->emit('success', 'Profile Updated Successively');
    }

    public function render()
    {
        return view('livewire.user.update-profile')->layout('layouts.user');
    }
}
