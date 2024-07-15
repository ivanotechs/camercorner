<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ChangePassword extends Component
{

    public User $user;
    public $old_password;
    public $password;
    public $password_confirmation;

    protected $rules = [
        "old_password" => 'required',
        "password" => 'required|confirmed',
        "password_confirmation" => 'required',
    ];

    public function save(){
        $data = $this->validate();

        if(Hash::check($this->old_password, auth()->user()->password)){
            $user = auth()->user();
            $user->password = Hash::make($this->password);
            $this->emit('success', 'Password Updated Successfully');
            $this->old_password = '';
            $this->password = '';
            $this->password_confirmation = '';
            return;
        }
        $this->emit('false', 'The password provided is incorrect');
    }

    public function render()
    {
        return view('livewire.user.change-password')->layout('layouts.user');
    }
}
