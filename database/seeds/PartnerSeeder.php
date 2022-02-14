<?php

use App\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        foreach (range(1,10) as $index) {
            Partner::create([
                'image' => 'default.png',
                'added_by' => 'superadmin@gmail.com',
            ]);
        }
    }
    
}
