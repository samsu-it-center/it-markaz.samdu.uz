<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class NewsList extends Component
{
    use WithPagination;

    public $perPage = 6; // Dastlab 6 ta yangilik yuklanadi

    public function loadMore()
    {
        $this->perPage += 6; // 6 tadan qo‘shib boradi
    }

    public function render()
    {
        $news = News::orderBy('updated_at', 'desc')->take($this->perPage)->get();
        return view('livewire.news-list',compact('news'));
    }
}
