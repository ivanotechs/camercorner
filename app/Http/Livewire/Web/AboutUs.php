<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;
use App\Models\Testimonial;
use App\Models\Teams;

class AboutUs extends Component
{
    protected $testimonials;

    // protected $categories;

    // protected $blogs;

    protected $teams;

    public function mount()
    {
        // 
        $this->testimonials = Testimonial::all();
        $this->teams= Teams::all();
    }
    public function render()
    {
        return view('livewire.web.about-us',[
            
                'teams'=> $this->teams,
                'testimonials' => $this->testimonials,
            
        ]);
    }
}
