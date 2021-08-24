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
    }
}
