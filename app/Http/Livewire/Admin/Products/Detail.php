<?php

namespace App\Http\Livewire\Admin\Products;

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
        return view('livewire.admin.products.detail')->layout('admin.layouts.app');
    }
}
