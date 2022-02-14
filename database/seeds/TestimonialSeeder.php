<?php

use App\Testimonial;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach (range(1,10) as $index) {
            Testimonial::create([
                'name' => $faker->text(20),
                'desination' => $faker->text(10),
                'details' => $faker->text(200),
                'added_by' => 'superadmin@gmail.com',
            ]);
        }
    }
}
