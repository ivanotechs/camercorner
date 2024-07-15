<?php

namespace App\Http\Livewire\User\Products;

use Livewire\Component;
use \App\Models\Product;

class Delete extends Component
{

    public $showModal = false;
    public Product $product;

    protected $listeners = [
        'load'=>'load'
    ];

    public function render()
    {
        return view('livewire.user.products.delete')->layout('layouts.user');
    }


    /**
     * @param Product $product
     */
    public function load(Product $product){
        $this->product = $product;
        $this->showModal = true;
    }

    public function delete(){
        try {
            unlink('storage/'.$this->product->image);
        }catch (\Exception $e){

        }
        $this->product->delete();
        $this->emit("success", "Product deleted successfully!");
        $this->emit("productDeleted");
        $this->showModal = false;
    }
}
