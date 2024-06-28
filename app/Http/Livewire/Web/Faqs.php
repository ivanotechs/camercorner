<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Category;
use App\Models\FAQ;

class Faqs extends Component
{
    public $categories;
    public $activeCategory;
    public $faqs;

    public function mount()
    {
        $this->categories = Category::where('type', 'faq')->with('faqs')->get();
        $this->activeCategory = $this->categories->first()->id; // Set the first category as active initially
        $this->faqs = $this->categories->first()->faqs;
    }

    public function setActiveCategory($categoryId)
    {
        $this->activeCategory = $categoryId;
        $this->faqs = $this->categories->find($categoryId)->faqs;
    }
    public function render()
    {
        return view('livewire.web.faqs', [
            'categories' => $this->categories,
            'faqs' => $this->faqs,
        ]);
    }

}
