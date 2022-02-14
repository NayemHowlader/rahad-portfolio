<?php

use App\NewsCategory;
use Illuminate\Database\Seeder;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsCategory::create([
            'category' => 'Video',
            'status' => 'Active',
            'created_by' => 'Nayem'
        ]);
    }
}
