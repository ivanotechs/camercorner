<?php

namespace App\Http\Livewire\Admin\Faq;

use App\Models\FAQ;
use Livewire\Component;

class Delete extends Component
{

    public $showModal = false;
    public FAQ $faq;

    protected $listeners = [
        'load'=>'load'
    ];


    public function render()
    {
        return view('livewire.admin.faq.delete')->layout('admin.layouts.app');
    }

    /**
     * @param FAQ $faq
     */
    public function load(FAQ $faq){
        $this->faq = $faq;
        $this->showModal = true;
    }

    public function delete(){
        $this->faq->delete();
        $this->emit("success", "FAQ deleted successfully!");
        $this->emit("faqDeleted");
        $this->showModal = false;
    }

}
