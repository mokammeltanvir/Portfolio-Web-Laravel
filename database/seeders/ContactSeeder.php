<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run()
    {
        DB::table('contact_section_settings')->insert([
            [
                'title' => 'Persona 1',
                'sub_title' => 'Me gustaría solicitar un presupuesto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Persona 2',
                'sub_title' => 'Me gustaría solicitar un presupuesto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
