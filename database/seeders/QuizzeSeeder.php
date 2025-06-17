<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quizze;
use App\Models\Course;

class QuizzeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat satu quiz untuk setiap course
        foreach (Course::all() as $course) {
            Quizze::create([
                'course_id' => $course->id,
                // tambahkan kolom lain jika ada, misal: 'title' => 'Quiz untuk ' . $course->name
            ]);
        }
    }
}
