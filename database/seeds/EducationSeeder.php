<?php

use App\Education;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
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
            Education::create([
                'institute' => $faker->text(20),
                'degree' => 'Bsc in cse',
                'year' => '2015-2017',
                'added_by' => 'superadmin@gmail.com',
            ]);
        }

    }
}
