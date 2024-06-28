<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use App\Http\Livewire\DataTable\DataTable;
use Livewire\Component;
use Illuminate\Http\Request;

class Index extends Component
{
    use DataTable;

    protected $listeners = [
        'serviceCreated' => '$refresh',
        'serviceDeleted' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.admin.services.index', ['services' => $this->rows])->layout('admin.layouts.app');
    }

    private function resetSort()
    {
        $this->sortField = 'created_at';
        $this->sortDirection = 'desc';
    }

    public function mount(Request $request)
    {
        $this->resetFilters();
        $this->resetSort();
        $this->perPage = 15;
        $this->page = 1;
    }

    protected function getBaseQuery()
    {
        return Service::query()->select('services.*');
    }

    public function resetFilters()
    {
        $this->filters = ["name" => ''];
    }

    public function filterName($query, $value)
    {
        if (strlen($value) === 0) {
            return $query;
        }

        return $query->where('title', 'like', "%$value%");
    }
}
