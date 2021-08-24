<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookWriter;

class BookWriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookWriter::create([
            'book_id'   => 1,
            'writer_id' => 1
        ]);

        BookWriter::create([
            'book_id'   => 2,
            'writer_id' => 2
        ]);
        
        BookWriter::create([
            'book_id'   => 3,
            'writer_id' => 2
        ]);

        BookWriter::create([
            'book_id'   => 4,
            'writer_id' => 2
        ]);

        BookWriter::create([
            'book_id'   => 5,
            'writer_id' => 3
        ]);

        BookWriter::create([
            'book_id'   => 5,
            'writer_id' => 4
        ]);
    }
}
