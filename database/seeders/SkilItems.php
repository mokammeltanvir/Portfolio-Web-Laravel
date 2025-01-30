<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkilItems extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skill_items')->insert([
            [
                'name' => 'HTML',
                'percent' => '90',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CSS',
                'percent' => '80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'JavaScript',
                'percent' => '70',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PHP',
                'percent' => '60',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel',
                'percent' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vue.js',
                'percent' => '40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'React.js',
                'percent' => '30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Node.js',
                'percent' => '20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Python',
                'percent' => '10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
