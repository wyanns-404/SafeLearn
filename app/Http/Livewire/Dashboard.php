<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Dashboard extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = Auth::user(); // ambil user login
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
