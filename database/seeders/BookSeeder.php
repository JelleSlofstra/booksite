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
            'image_path' => '/images/magier.jpg'
        ]);

        Book::create([
            'title' => 'A Storm of Swords',
            'category' => 'fantasy',
            'series' => 'A song of ice and fire',
            'image_path' => '/images/stormofswords.jpg'
        ]);

        Book::create([
            'title' => 'A Clash of Kings',
            'category' => 'fantasy',
            'series' => 'A song of ice and fire',
            'image_path' => '/images/clashofkings.jpg'
        ]);

        Book::create([
            'title' => 'A knight of the seven kingdoms',
            'category' => 'fantasy',
            'image_path' => '/images/knightofsevenkingdoms.jpg'
        ]);

        Book::create([
            'title' => 'Anton de Kom',
            'subtitle'  => 'Biografie',
            'category' => 'History',
            'image_path' => '/images/antondekom.jpg'
        ]);
        
        Book::create([
            'title' => 'Guns, germs and steel',
            'subtitle'  => 'a short history of everybody for the last 13,000 years',
            'category' => 'History',
            'image_path' => '/images/gunsgermssteel.jpg'
        ]);
        
        Book::create([
            'title' => 'Collapse',
            'subtitle'  => 'how societies choose to fail or survive',
            'category' => 'History',
            'image_path' => '/images/collapse.jpg'
        ]);
        
        Book::create([
            'title' => 'The Divine Comedy',
            'category' => 'literature',
            'image_path' => '/images/divinecomedy.jpg'
        ]);
        
        Book::create([
            'title' => 'Oorlog en vrede',
            'category' => 'literature',
            'image_path' => '/images/oorlogvrede.jpg'
        ]);
        
        Book::create([
            'title' => 'Congo',
            'subtitle'  => 'een geschiedenis',
            'category' => 'History',
            'image_path' => '/images/congo.jpg'
        ]);
        
        Book::create([
            'title' => 'Revolusi',
            'subtitle'  => 'Indonesie en het ontstaan van de moderne wereld',
            'category' => 'History',
            'image_path' => '/images/revolusi.jpg'
        ]);
        
        Book::create([
            'title' => 'Stalingrad',
            'category' => 'History',
            'image_path' => '/images/stalingrad.jpg'
        ]);
        
        Book::create([
            'title' => 'De slag om Warschau',
            'subtitle'  => 'Lenins mislukte aanval op Europa',
            'category' => 'History',
            'image_path' => '/images/slagomwarschau.jpg'
        ]);
        
        Book::create([
            'title' => 'De ondergang van Napoleon',
            'subtitle'  => 'en het congress van Wenen',
            'category' => 'History',
            'image_path' => '/images/napoleon.jpg'
        ]);
        
        Book::create([
            'title' => 'De Pauzen',
            'subtitle'  => 'een geschiedenis',
            'category' => 'History',
            'image_path' => '/images/pauzen.jpg'
        ]);
        
        Book::create([
            'title' => 'Vallei der koningen',
            'category' => 'historic novel',
            'series' => 'Taita',
            'image_path' => '/images/valleiderkoningen.jpg'
        ]);
        
        Book::create([
            'title' => 'Het Koningsgraf',
            'category' => 'historic novel',
            'series' => 'Taita',
            'image_path' => '/images/koningsgraf.jpg'
        ]);
        
        Book::create([
            'title' => 'De scheepsjongens van Bontekoe',
            'category' => 'historic novel',
            'image_path' => '/images/scheepsjongens.jpg'
        ]);
        
        Book::create([
            'title' => 'The evening and the morning',
            'subtitle'  => 'een geschiedenis',
            'category' => 'historic novel',
            'series' => 'Pillars of the earth',
            'image_path' => '/images/eveningmorning.jpg'
        ]);
        
        Book::create([
            'title' => 'De lekkerste eenpans-gerechten',
            'category' => 'cooking',
            'image_path' => '/images/eenpansgerechten.jpg'
        ]);
    }
}
