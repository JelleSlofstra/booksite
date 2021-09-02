<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Writer::create([
            'name'  => 'Raymond E Feist'
        ]);

        Writer::create([
            'name'  => 'George rr Martin'
        ]);

        Writer::create([
            'name'  => 'Alice Boots'
        ]);

        Writer::create([
            'name'  => 'Rob Woortman'
        ]);

        Writer::create([
            'name'  => 'Jared Diamond'
        ]);

        Writer::create([
            'name'  => 'Dante Alighieri'
        ]);

        Writer::create([
            'name'  => 'Lev Nikolayevich Tolstoy'
        ]);

        Writer::create([
            'name'  => 'David van Reybrouck'
        ]);

        Writer::create([
            'name'  => 'Anthony Beevor'
        ]);

        Writer::create([
            'name'  => 'Adam Zamoyski'
        ]);

        Writer::create([
            'name'  => 'John Julius Norwhich'
        ]);

        Writer::create([
            'name'  => 'Willbur Smith'
        ]);

        Writer::create([
            'name'  => 'Johan Fabricius'
        ]);

        Writer::create([
            'name'  => 'Ken Follet'
        ]);

        Writer::create([
            'name'  => 'Henrietta Wilkinson'
        ]);
    }
}
