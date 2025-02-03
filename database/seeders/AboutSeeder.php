<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('abouts')->insert([
            'title' => 'Sobre Mí',
            'description' => 'Soy un desarrollador web apasionado con experiencia en Laravel y tecnologías modernas.',
            'image' => 'about.jpg', // Asegúrate de tener esta imagen en `storage/app/public/`
            'resume' => 'resume.pdf', // Archivo PDF del currículum
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
