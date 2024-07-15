<?php

namespace App\Http\Livewire\User\Products;

use App\Models\Product;
use Livewire\Component;

class Detail extends Component
{
    public $product;
    
    public $listeners = ['productCreated' => '$refresh'];

    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        return view('livewire.user.products.detail')->layout('layouts.user');
    }
}

