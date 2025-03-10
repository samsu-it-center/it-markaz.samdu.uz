<?php

namespace App\Livewire;

use App\Models\DinamicMenu;
use Livewire\Component;

class DynamicMenu extends Component
{
    public $menus;

    public function mount()
    {
        $this->menus = DinamicMenu::all(); // Fetch menus from DB
    }

    public function render()
    {
        return view('livewire.dynamic-menu');
    }
}
