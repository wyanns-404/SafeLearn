<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class ModulKursus extends Component
{
    public $course;
    public $modules = [];

    public function mount($courseId)
    {
        $this->course = Course::findOrFail($courseId);
        $this->modules = \App\Models\Module::where('course_id', $courseId)->get();
    }

    public function render()
    {
        return view('livewire.modul-kursus');
    }
}
