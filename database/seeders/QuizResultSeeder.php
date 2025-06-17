<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuizResult;
use App\Models\User;
use App\Models\Quizze;

class QuizResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua user dan quiz
        $users = User::all();
        $quizzes = Quizze::all();

        // Setiap user akan memiliki hasil untuk setiap quiz
        foreach ($users as $user) {
            foreach ($quizzes as $quiz) {
                QuizResult::create([
                    'user_id' => $user->id,
                    'quiz_id' => $quiz->id,
                    'score' => rand(60, 100), // skor acak antara 60-100
                ]);
            }
        }
    }
}
