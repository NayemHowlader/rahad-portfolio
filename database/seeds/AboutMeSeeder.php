<?php

use App\AboutMe;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        AboutMe::create([
            'name' => 'Rahad Amin',
            'address' => 'Uttara',
            'study' => 'Oxfor university',
            'degree' => 'Master of Science',
            'mail' => 'hello@cavani.com',
            'phone' => '+77 022 444 05 05',
            'description' => 'Description',
        ]);
    }
}
