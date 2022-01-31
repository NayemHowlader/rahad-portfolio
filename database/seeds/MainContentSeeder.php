<?php

use App\MainContent;
use Illuminate\Database\Seeder;

class MainContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        MainContent::create([
            'title' => 'DAVID PARKER',
            'sub_title1' => 'Designer',
            'sub_title2' => 'Developer',
            'sub_title3' => 'Freelancer',
        ]);

    }
}
