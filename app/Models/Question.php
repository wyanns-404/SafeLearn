<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'quiz_id',
        'content',
    ];

    public function choices()
    {
        return $this->hasMany(\App\Models\Choice::class, 'question_id');
    }
}
