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
            'category' => 'fantasy'
        ]);

        Category::create([
            'category' => 'history'
        ]);

        Category::create([
            'category' => 'literature'
        ]);

        Category::create([
            'category' => 'historic novel'
        ]);

        Category::create([
            'category' => 'cooking'
        ]);
    }
}
