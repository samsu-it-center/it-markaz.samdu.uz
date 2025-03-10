<?php

namespace App\Livewire;

use App\Models\StartUp;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsTabs extends Component
{
    use WithPagination;

    public $activeTab;
    public $perPage = 4;

    protected $queryString = ['activeTab']; // URL-da tabni saqlash

    protected $listeners = ['loadMore'];

    public function mount()
    {
        $this->activeTab = $this->activeTab ?? 1; // Default tab
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetPage();
    }

    public function loadMore()
    {
        $this->perPage += 4;
    }

    public function render()
    {
        $projects = StartUp::where('type', $this->activeTab)
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.projects-tabs', compact('projects'));
    }
}
