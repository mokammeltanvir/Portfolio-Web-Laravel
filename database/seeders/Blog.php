<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([
            'title' => 'Mi Primer Heroe',
            'image' => 'hero.jpg',
            'category' => 1,
            'description' => 'description',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
