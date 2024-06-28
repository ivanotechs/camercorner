<?php

namespace App\Http\Livewire\Web\Shop\Checkout;

use Livewire\Component;

class ConfirmationModal extends Component
{
    public $show = false;

    protected $listeners = [
        'openConfirmationModal' => 'open',
    ];

    public function open()
    {
        $this->show = true;
    }

    public function close()
    {
        $this->show = false;
    }

    public function confirm()
    {
        $this->emit('confirmOrder');
        $this->close();
    }
    public function render()
    {
        return view('livewire.web.shop.checkout.confirmation-modal');
    }
}
