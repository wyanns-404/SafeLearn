<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class Kuis extends Component
{
    public $course;
    public $quiz;
    public $questions;
    public $answers = [];
    public $score = null; // nilai kamu

    public function mount($courseId)
    {
        $this->course = Course::findOrFail($courseId);
        $this->quiz = $this->course->quiz;
        $this->questions = $this->quiz
            ? $this->quiz->questions()->with('choices')->get()
            : collect();
    }

    public function submit()
    {
        $this->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|integer',
        ]);

        $benar = 0;
        foreach ($this->questions as $question) {
            $selected = $this->answers[$question->id] ?? null;
            if ($selected) {
                $choice = $question->choices->where('id', $selected)->first();
                if ($choice && $choice->is_correct) {
                    $benar++;
                }
            }
        }
        $this->score = $benar . ' / ' . $this->questions->count();
        session()->flash('success', 'Jawaban berhasil dikumpulkan!');
    }

    public function render()
    {
        return view('livewire.kuis');
    }
}
