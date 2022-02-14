<?php

use App\Experience;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
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
            Experience::create([
                'institute' => $faker->text(20),
                'position' => 'HR',
                'year' => '2015-2017',
                'added_by' => 'superadmin@gmail.com',
            ]);
        }
    }
}
