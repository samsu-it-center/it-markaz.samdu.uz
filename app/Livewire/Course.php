<?php

namespace App\Livewire;

use Livewire\Component;

class Course extends Component
{
    public object $courses;

    public function mount()
    {
        $this->courses = \App\Models\Course::all();
    }

    public function render()
    {
        return view('livewire.course');
    }
}
