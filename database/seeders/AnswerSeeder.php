<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;
use App\Models\QuizResult;
use App\Models\Question;
use App\Models\Choice;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Untuk setiap hasil quiz, jawab semua pertanyaan di quiz tersebut
        foreach (QuizResult::all() as $quizResult) {
            // Ambil semua pertanyaan untuk quiz ini
            $questions = Question::where('quiz_id', $quizResult->quiz_id)->get();

            foreach ($questions as $question) {
                // Pilih salah satu choice secara acak untuk jawaban user
                $choice = Choice::where('question_id', $question->id)->inRandomOrder()->first();

                Answer::create([
                    'question_id' => $question->id,
                    'quiz_result_id' => $quizResult->id,
                    'choice_id' => $choice->id,
                ]);
            }
        }
    }
}
