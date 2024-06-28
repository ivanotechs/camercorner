<?php

namespace App\Http\Livewire\Web;

use Livewire\Component;

class Reviews extends Component
{
    public $rating = 0;
    public $showReviewForm = false;
    public function render()
    {
        return view('livewire.web.reviews');
    }

    public function set_rating($rating){
        $this->rating = $rating;
    }
    public function showReview(){
        $this->showReviewForm =!$this->showReviewForm;
    }
}
