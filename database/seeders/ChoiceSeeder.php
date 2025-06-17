<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Choice;
use App\Models\Question;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Untuk setiap pertanyaan, buat 4 pilihan jawaban (1 benar, 3 salah)
        foreach (Question::all() as $question) {
            switch ($question->content) {
                // Gempa Bumi
                case 'Apa yang harus dilakukan saat terjadi gempa di dalam ruangan?':
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Berlindung di bawah meja dan jauhi kaca',
                        'is_correct' => true,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Lari ke luar secepatnya',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Berdiri di dekat jendela',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Tetap diam di tempat tidur',
                        'is_correct' => false,
                    ]);
                    break;

                case 'Mengapa penting mengetahui jalur evakuasi di gedung?':
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Agar bisa evakuasi dengan cepat dan aman',
                        'is_correct' => true,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Supaya bisa menolong orang lain',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Untuk mencari makanan',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Agar tidak bosan',
                        'is_correct' => false,
                    ]);
                    break;

                // Kebakaran
                case 'Apa penyebab umum terjadinya kebakaran di rumah?':
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Korsleting listrik dan kompor',
                        'is_correct' => true,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Membuka jendela',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Menyiram tanaman',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Mematikan lampu',
                        'is_correct' => false,
                    ]);
                    break;

                case 'Apa yang harus dilakukan jika terjebak asap saat kebakaran?':
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Menutup hidung dengan kain basah dan merangkak keluar',
                        'is_correct' => true,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Berlari sambil berteriak',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Buka semua pintu dan jendela',
                        'is_correct' => false,
                    ]);
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => 'Bersembunyi di lemari',
                        'is_correct' => false,
                    ]);
                    break;
            }
        }
    }
}
