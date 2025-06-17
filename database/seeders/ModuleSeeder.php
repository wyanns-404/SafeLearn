<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gempa = Course::where('name', 'Modul Edukasi Gempa Bumi')->first();
        $kebakaran = Course::where('name', 'Modul Edukasi Kebakaran')->first();

        // Modul untuk Gempa Bumi
        Module::create([
            'course_id' => $gempa->id,
            'title' => 'Langkah Kesiapsiagaan Gempa',
            'content' => 'Pelajari cara berlindung di bawah meja, menjauh dari kaca, dan evakuasi ke tempat terbuka saat terjadi gempa.',
        ]);
        Module::create([
            'course_id' => $gempa->id,
            'title' => 'Evakuasi Aman Saat Gempa',
            'content' => 'Kenali jalur evakuasi, titik kumpul, dan pentingnya membawa tas siaga bencana.',
        ]);

        // Modul untuk Kebakaran
        Module::create([
            'course_id' => $kebakaran->id,
            'title' => 'Penyebab Umum Kebakaran',
            'content' => 'Kenali sumber api seperti korsleting listrik, kompor, dan lilin. Hindari menumpuk kabel dan pastikan alat listrik aman.',
        ]);
        Module::create([
            'course_id' => $kebakaran->id,
            'title' => 'Evakuasi dan Penanganan Awal',
            'content' => 'Pelajari cara menggunakan APAR, menutup hidung dengan kain basah, dan evakuasi melalui jalur aman.',
        ]);
    }
}
