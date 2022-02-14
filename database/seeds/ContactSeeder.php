<?php

use App\Contact;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
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
            Contact::create([
                'name' => $faker->text(10),
                'email' => 'superadmin@gmail.com',
                'message' => $faker->text(100)
            ]);
        }

    }
}
