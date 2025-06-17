<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Course; // tambahkan ini

class Dashboard extends Component
{
    public User $user;
    public $courses; // tambahkan property untuk courses

    public function mount()
    {
        $this->user = Auth::user(); // ambil user login
        $this->courses = Course::all(); // ambil semua kursus
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
