<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HeroSeeder::class,
            ServiceSeeder::class,
            ContactSeeder::class,
            AboutSeeder::class,
            PortfolioSectionSettings::class,
            SkilItems::class,
            SkilSectionSettings::class,
            Experience::class,
            FeedBackSectionSettings::class,
            FeedBack::class,
            BlogCategories::class,
            Blog::class,
            BlogSectionSettings::class,
            GeneralSettings::class,
            FooterInfos::class,
            FooterContactInfo::class,
        ]);

        User::factory(1)->create();
            
    }
}
