<?php

namespace App\Livewire;

use App\Models\About;
use App\Models\DinamicMenu;
use Livewire\Component;

class Footer extends Component
{
    public object $footer;
    public object $menus;

    public function mount()
    {
        $this->footer = About::first();
        $this->menus = DinamicMenu::all();
    }
    public function render()
    {
        return view('livewire.footer');
    }
}
