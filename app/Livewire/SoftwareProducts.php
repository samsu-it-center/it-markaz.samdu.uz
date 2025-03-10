<?php

namespace App\Livewire;

use App\Models\CategorySoftware;
use App\Models\ProductType;
use App\Models\SoftwareProduct;
use Livewire\Component;
use Livewire\WithPagination;

class SoftwareProducts extends Component
{
    use WithPagination;

    public $perPage = 6;
    public $selectedCategory = null;

    protected $queryString = ['selectedCategory'];

    public function mount()
    {
        $this->selectedCategory = request()->query('selectedCategory', null);
    }

    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage();
    }

    public function loadMore()
    {
        $this->perPage += 6;
    }

    public function render()
    {
        $locale = app()->getLocale();

        $categories = CategorySoftware::all();

        if ($this->selectedCategory) {
            $products = SoftwareProduct::where('type', $this->selectedCategory)
                ->latest()
                ->paginate($this->perPage);
        } else {
            $products = SoftwareProduct::latest()
                ->paginate($this->perPage);
        }


        return view('livewire.software-products', compact('products', 'locale', 'categories'));
    }
}
