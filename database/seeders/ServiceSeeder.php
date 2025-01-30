<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Desarrollo Web',
                'description' => 'Creación de sitios web modernos y responsivos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Diseño UI/UX',
                'description' => 'Diseños atractivos e intuitivos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
