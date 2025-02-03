<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Experience extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            'title' => 'Mi Primer Heroe',
            'image' => 'hero.jpg',
            'phone' => '123456789',
            'email' => 'mail@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
