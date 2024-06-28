<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Category;
use App\Models\Blogs;

class Blog extends Component
{
    protected $categories;

    protected $category;

    protected $blogs;

    protected $top;

    public function mount()
    {
        $this->categories = Category::where('type', 'blog')->get();
        // $this->category = Category::where('type', 'blog')->second();

        $this->top = Blogs::where('category_id', '2')->get();
        $this->blogs =Blogs::all();
    }
    public function render()
    {
        return view('livewire.web.blog',[
            'categories'=>$this->categories,
            'top'=> $this->top,
            'blogs'=>$this->blogs,
        ]);
    }
}
