<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class HeaderMenu extends Component
{
    public array $languages = [
        ['code' => 'uz', 'name' => "O'zbek", 'flag' => 'http://markaz.sampc.uz/flags/flag-uz.png'],
        ['code' => 'en', 'name' => "English", 'flag' => 'http://markaz.sampc.uz/flags/flag-en.png'],
        ['code' => 'ru', 'name' => "Русский", 'flag' => 'http://markaz.sampc.uz/flags/flag-ru.png'],
    ];

    public array $language;

    public string $currentLanguage; // Default til

    public function mount()
    {
        $this->currentLanguage = session('locale') ?? "uz";
        $this->changeLangArray();
    }

    public function changeLangArray()
    {
        foreach($this->languages as $language) {
            if ($language['code'] == $this->currentLanguage) {
                $this->language = $language;

            }
        }
    }


    public function changeLanguage($langCode)
    {
        $lang = strtolower($langCode);
        if ($lang == 'ru' || $lang == 'uz' || $lang == 'en') {
            session([
                'locale' => $lang
            ]);
        }
        $this->currentLanguage = $langCode;

        $this->changeLangArray();

        return redirect()->route('lang',$langCode);
    }

    public function render()
    {
        return view('livewire.header-menu');
    }
}
