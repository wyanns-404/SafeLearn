<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizze extends Model
{
    protected $fillable = [
        'course_id',
        // tambahkan kolom lain jika ada
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(\App\Models\Question::class, 'quiz_id');
    }
}
