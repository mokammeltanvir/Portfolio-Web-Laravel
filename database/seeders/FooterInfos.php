<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterInfos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footer_infos')->insert([
            'info' => 'Mi Primer Heroe',
            'copy_right' => 'hero.jpg',
            'powered_by' => 'hero.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
