<?php

use App\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'Ave Brook',
            'category_name' => 'Ave Brook',
            'details' => 'Ave Brook',
            'created_by' => 'Nayem'
        ]);
    }
}
