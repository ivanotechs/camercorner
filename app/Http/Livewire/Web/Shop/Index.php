<?php

namespace App\Http\Livewire\Web\Shop;

use Livewire\Component;
use App\Models\Product;

class Index extends Component
{
    public $showFilters = true;

    protected $products;

    public function toggleFilters(){
        $this->showFilters =!$this->showFilters;
    }

    public function mount()
    {
        $this->products=Product::all();
    }

    public function render()
    {
        return view('livewire.web.shop.index',[
            'products'=>$this->products,
        ]);
    }
}
