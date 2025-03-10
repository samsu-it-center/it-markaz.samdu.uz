<?php

namespace App\Livewire;

use App\Models\Slider;
use Livewire\Component;

class Sliders extends Component
{
    public $sliders;

    public function mount()
    {
        $this->sliders = Slider::all();
    }
    public function render()
    {
        return view('livewire.sliders');
    }
}
