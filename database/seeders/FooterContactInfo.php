<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterContactInfo extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('footer_contact_infos')->insert([
            'address' => '123 Main Street, New York, NY 10030',
            'phone' => '+1 123 456 7890',
            'email' => 'email@prueba.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
