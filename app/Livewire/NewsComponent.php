<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsComponent extends Component
{
    public function render()
    {
        $news = News::latest()->take(6)->get(); // Eng so'nggi 6 ta yangilik
        return view('livewire.news-component',compact('news'));
    }
}
