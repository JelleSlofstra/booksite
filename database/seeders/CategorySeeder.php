<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category' => 'Fantasy'
        ]);

        Category::create([
            'category' => 'History'
        ]);

        Category::create([
            'category' => 'Literature'
        ]);

        Category::create([
            'category' => 'Historic novel'
        ]);

        Category::create([
            'category' => 'Cooking'
        ]);
    }
}
