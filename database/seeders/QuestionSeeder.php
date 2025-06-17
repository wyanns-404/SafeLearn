<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Quizze;
use App\Models\Course;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gempaQuiz = Quizze::where('course_id', Course::where('name', 'Modul Edukasi Gempa Bumi')->first()->id)->first();
        $kebakaranQuiz = Quizze::where('course_id', Course::where('name', 'Modul Edukasi Kebakaran')->first()->id)->first();

        // Soal untuk Gempa Bumi
        Question::create([
            'quiz_id' => $gempaQuiz->id,
            'content' => 'Apa yang harus dilakukan saat terjadi gempa di dalam ruangan?',
        ]);
        Question::create([
            'quiz_id' => $gempaQuiz->id,
            'content' => 'Mengapa penting mengetahui jalur evakuasi di gedung?',
        ]);

        // Soal untuk Kebakaran
        Question::create([
            'quiz_id' => $kebakaranQuiz->id,
            'content' => 'Apa penyebab umum terjadinya kebakaran di rumah?',
        ]);
        Question::create([
            'quiz_id' => $kebakaranQuiz->id,
            'content' => 'Apa yang harus dilakukan jika terjebak asap saat kebakaran?',
        ]);
    }
}
