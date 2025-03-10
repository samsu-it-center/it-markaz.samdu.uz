<?php

namespace App\Livewire;

use App\Models\News;
use App\Models\SoftwareProduct;
use Livewire\Component;

class SoftwareProductShow extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = SoftwareProduct::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.software-product-show');
    }
}
