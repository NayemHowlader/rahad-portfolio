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
        $this->call(PortfolioSeeder::class);
    }
}
