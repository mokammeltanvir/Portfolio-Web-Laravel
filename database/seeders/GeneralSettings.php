<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GeneralSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('general_settings')->insert([
            'logo' => 'logo.png',
            'footer_logo' => 'footer_logo.png',
            'favicon' => 'favicon.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
