<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Seeder;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Series::create([ 'name' => 'The Riftwar Saga']);
        Series::create([ 'name' => 'A Song of Ice and Fire']);
        Series::create([ 'name' => 'Taita']);
        Series::create([ 'name' => 'Pillars of the Earth']);
    }
}
