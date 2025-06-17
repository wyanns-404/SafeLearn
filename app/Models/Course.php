<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Quizze; // gunakan model Quizze

class Course extends Model
{
    public function quiz()
    {
        return $this->hasOne(Quizze::class); // gunakan Quizze::class
    }
}
