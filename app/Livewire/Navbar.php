<?php

namespace App\Livewire;

use App\Models\DinamicMenu;
use Livewire\Component;

class Navbar extends Component
{
    public $languages;
    public $currentLocale;
    public $menus;

    public function mount()
    {
        $this->currentLocale = session('locale') ?? "uz";
        $this->languages = [
            'en' => ['name' => 'English', 'flag' => 'flag-en.png'],
            'uz' => ['name' => "O'zbek", 'flag' => 'flag-uz.png'],
            'ru' => ['name' => 'Русский', 'flag' => 'flag-ru.png'],
        ];
        $this->menus = DinamicMenu::all();
    }

    public function changeLanguage($locale)
    {
        session(['locale' => $locale]);
        $this->currentLocale = $locale;
        $this->emit('languageChanged', $locale);
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
