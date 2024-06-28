<?php

namespace App\Http\Livewire\Admin\Products;

use App\Http\Livewire\DataTable\DataTable;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Livewire\Component;

class Index extends Component
{
    use DataTable;

    public ?Category $category = null;

    protected $listeners = [
        'productCreated' => '$refresh',
        'productDeleted' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.admin.products.index', ['products' => $this->rows])->layout('admin.layouts.app');
    }

    /**
     * Configure sort when loading the page or switching the tab group
     *
     * @return void
     */
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
        return Product::query()->select('products.*');
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

        return $query->where('name', 'like', '%' . $value . '%');
    }
}
