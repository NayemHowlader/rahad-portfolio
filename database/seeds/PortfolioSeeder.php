<?php

use App\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Portfolio::create([
            'title' => 'Ave Brook',
            'category' => 'Ave Brook',
            'details' => 'Ave Brook',
            'created_by' => 'Nayem'
        ]);
    }
}
