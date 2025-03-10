<?php

namespace App\Livewire;

use App\Models\Gallery;
use Livewire\Component;

class BrandLogo extends Component
{
    public $brands;

    public function mount()
    {
        $this->brands = Gallery::all();
    }

    public function render()
    {
        return view('livewire.brand-logo');
    }
}
