<?php

namespace App\Http\Livewire\Web\Shop\Checkout;

use Livewire\Component;

class Index extends Component
{
    public $step = 1;
    protected $listeners = [
        'confirmOrder' => 'submit',
    ];

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }
    public function render()
    {
        return view('livewire.web.shop.checkout.index');
    }

    public function openConfirmationModal()
    {
        $this->emit('openConfirmationModal');
    }
}
