<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class CourseList extends Component
{
    use WithPagination;

    public string $type = ''; // Online yoki Offline filtri

    protected $updatesQueryString = ['type']; // URL dagi query stringni yangilaydi

    public function updatedType()
    {
        $this->resetPage(); // Filtr o'zgarganda 1-sahifaga qaytish
    }

    public function render()
    {
        $courses = \App\Models\Course::when($this->type, function ($query) {
            return $query->where('type', $this->type);
        })->paginate(3); // 6 ta kurs chiqariladi

        return view('livewire.course-list',compact('courses'));
    }
}
