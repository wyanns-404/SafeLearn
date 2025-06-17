<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class Kursus extends Component
{
    public $courses;

    public function mount()
    {
        $this->courses = Course::all();
    }

    public function render()
    {
        return view('livewire.kursus');
    }
}
