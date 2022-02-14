<?php

use App\PortfolioCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // $this->call(MainContentSeeder::class);
       // $this->call(AboutMeSeeder::class);
        //$this->call(PortfolioCategorySeeder::class);
        // $this->call(PortfolioSeeder::class);
        // $this->call(ServiceSeeder::class);
        //$this->call(ContactSeeder::class);
        // $this->call(InterestSeeder::class);
        // $this->call(ProgrammingSeeder::class);
        // $this->call(LanguageSeeder::class);
        // $this->call(EducationSeeder::class);
        // $this->call(ExperienceSeeder::class);
        // $this->call(PartnerSeeder::class);
        // $this->call(TestimonialSeeder::class);
        $this->call(NewsCategorySeeder::class);
        $this->call(NewsSeeder::class);
    }
}
