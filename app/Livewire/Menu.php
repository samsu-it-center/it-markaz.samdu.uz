<?php

namespace App\Livewire;

use App\Models\DinamicMenu;
use Livewire\Component;

class Menu extends Component
{
    public $menus;

    public function mount()
    {
        $this->menus = DinamicMenu::all();
    }

    public function render()
    {
        return view('livewire.menu');
    }
}
