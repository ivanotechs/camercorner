<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Validation\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $showModal = false;
    public $isEditMode = false;
    public ?Product $product = null;

    public $name = "";
    public $price = "";
    public $description = "";
    public $category_id = null;
    public $image;

    protected $listeners = [
        'load' => 'load',
        'delete' => 'delete'
    ];

    public function load(?Product $product)
    {
        $this->product = $product;
        if (isset($this->product) && $this->product->exists) {
            $this->isEditMode = true;
            $this->name = $product->name;
            $this->price = $product->price;
            $this->description = $product->description;
            $this->category_id = $product->category_id;
        } else {
            $this->isEditMode = false;
        }
        $this->showModal = true;
    }

    protected $rules = [
        "name" => 'required',
        "price" => 'required|numeric',
        "description" => 'required',
        "category_id" => 'required|exists:categories,id',
        "image" => 'nullable|image|max:1024' 
    ];

    public function save()
    {
        $data = $this->validate();

        if ($this->isEditMode) {
            $this->product->update($data);
            if ($this->image) {
                $this->product->image = $this->image->store('images', 'public');
                $this->product->save();
            }
            $this->emit("success", "Product updated successfully!");
        } else {
            $data['image'] = $this->image ? $this->image->store('images', 'public') : null;
            $this->product = Product::create($data);
            $this->emit("success", "Product created successfully!");
        }

        $this->emit("productCreated");
        $this->showModal = false;
        $this->resetForm();
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product && $product->image) {
            unlink(storage_path('storage/' . $product->image));
        }
        $product->delete();
        $this->emit("success", "Product deleted successfully!");
    }

    public function updatedShowModal($value)
    {
        if (!$value) {
            $this->resetForm();
        }
    }

    private function resetForm()
    {
        $this->name = "";
        $this->price = "";
        $this->description = "";
        $this->category_id = null;
        $this->image = null;
        $this->isEditMode = false;
        $this->product = null;
    }

    public function render()
    {
        $categories = Category::product();
        return view('livewire.admin.products.edit', ['categories' => $categories])->layout('admin.layouts.app');
    }
}
