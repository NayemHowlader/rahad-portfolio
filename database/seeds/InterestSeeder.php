<?php

use App\Interest;
use Faker\Factory;
use Illuminate\Database\Seeder;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Factory::create();
        foreach (range(1,20) as $index) {
            Interest::create([
                'title' => $faker->text(200),
                'added_by' => 'superadmin@gmail.com',
            ]);
        }
    }
}
