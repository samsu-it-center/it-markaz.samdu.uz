<?php

namespace App\Livewire;

use App\Models\SoftwareProduct;
use App\Models\StartUp;
use Livewire\Component;

class ProjectShow extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = StartUp::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.project-show');
    }
}
