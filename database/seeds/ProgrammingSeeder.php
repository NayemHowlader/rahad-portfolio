<?php

use App\Programming;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProgrammingSeeder extends Seeder
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
            Programming::create([
                'title' => $faker->text(200),
                'level' => 0.9,
                'added_by' => 'superadmin@gmail.com',
            ]);
        }
    }
}
