<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsShow extends Component
{
    public $news;
    public $prevNews;
    public $nextNews;

    public function mount($id)
    {
        $this->news = News::findOrFail($id);
        $this->prevNews = News::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $this->nextNews = News::where('id', '>', $id)->orderBy('id', 'asc')->first();
    }

    public function render()
    {
        return view('livewire.news-show');
    }
}
