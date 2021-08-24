<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'title' => 'Magician',
            'category' => 'fantasy',
            'series' => 'The riftwar saga',
            'image_path' => 'resources/images/magier.jpg'
        ]);

        Book::create([
            'title' => 'A Storm of Swords',
            'category' => 'fantasy',
            'series' => 'A song of ice and fire',
            'image_path' => 'resources/images/stormofswords.jpg'
        ]);

        Book::create([
            'title' => 'A Clash of Kings',
            'category' => 'fantasy',
            'series' => 'A song of ice and fire',
            'image_path' => 'resources/images/clashofkings.jpg'
        ]);

        Book::create([
            'title' => 'A knight of the seven kingdoms',
            'category' => 'fantasy',
            'image_path' => 'resources/images/knightofsevenkingdoms.jpg'
        ]);

        Book::create([
            'title' => 'Anton de Kom',
            'category' => 'History',
            'image_path' => 'resources/images/antondekom.jpg'
        ]);
    }
}
