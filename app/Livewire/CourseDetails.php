<?php

namespace App\Livewire;

use Livewire\Component;

class CourseDetails extends Component
{
    public $course;
    public $courses;
    public function mount($course)
    {
        $this->courses = \App\Models\Course::all();
        $this->course = $course;
    }
    public function render()
    {
        return view('livewire.course-details');
    }
}
