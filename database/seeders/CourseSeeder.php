<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Course::create([
            'name' => 'Modul Edukasi Gempa Bumi',
            'description' => 'Pelajari langkah-langkah kesiapsiagaan saat terjadi gempa bumi, termasuk evakuasi yang aman dan cepat.',
        ]);
        Course::create([
            'name' => 'Modul Edukasi Kebakaran',
            'description' => 'Kenali penyebab umum kebakaran dan pelajari cara evakuasi serta penanganan awal untuk keselamatan diri.',
        ]);
    }
}
