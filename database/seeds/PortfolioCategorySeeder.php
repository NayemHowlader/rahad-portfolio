<?php

use App\PortfolioCategory;
use Illuminate\Database\Seeder;

class PortfolioCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PortfolioCategory::create([
            'category' => 'Video',
            'status' => 'Active',
            'created_by' => 'Nayem'
        ]);

        
    }
}
