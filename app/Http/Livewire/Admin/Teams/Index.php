<?php

namespace App\Http\Livewire\Admin\Teams;

use App\Http\Livewire\DataTable\DataTable;
use App\Models\Teams;
use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{

   use DataTable;

    protected $listeners = ['teamsCreated'=>'$refresh', 'teamsDeleted'=>'$refresh'];

    public function render()
    {
        return view('livewire.admin.teams.index',['teams'=>$this->rows])->layout('admin.layouts.app');
    }

    protected function getBaseQuery()
    {
        return Teams::query()->select('teams.*');
    }

    public function resetFilters()
    {
        $this->filters = ["name"=>''];
    }

    /**
     * Configure sort when loading the page or switching the tab group
     *
     * @return void
     */
    private function resetSort()
    {
        $this->sortField = 'name';
        $this->sortDirection = 'desc';
    }


    public function mount(Request $request){
        $this->resetFilters();
        $this->resetSort();
        $this->perPage = 15;
        $this->page = 1;
    }


    public function filterName($query, $value)
    {
        if (strlen($value) === 0) {
            return $query;
        }

        return $query->where('name','like',"%($value)%");
    }
}
