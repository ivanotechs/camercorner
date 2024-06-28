<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Blog;
use Dompdf\Exception;
use Livewire\Component;

class Delete extends Component
{
    public $showModal = false;
    public Blog $blog;

    protected $listeners = [
        'load'=>'load'
    ];


    public function render()
    {
        return view('livewire.admin.blog.delete')->layout('admin.layouts.app');
    }

    /**
     * @param Blog $blog
     */
    public function load(Blog $blog){
        $this->blog = $blog;
        $this->showModal = true;
    }

    public function delete(){
        try {
            unlink('storage/'.$this->blog->image);
        }catch (\Exception $e){

        }
        $this->blog->delete();
        $this->emit("success", "blog deleted successfully!");
        $this->emit("blogDeleted");
        $this->showModal = false;
    }
}
