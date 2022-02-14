<?php

use App\Service;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class ServiceSeeder extends Seeder
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
            Service::create([
                'title' => $faker->text(200),
                'added_by' => 'superadmin@gmail.com',
            ]);
        }


    }

}
