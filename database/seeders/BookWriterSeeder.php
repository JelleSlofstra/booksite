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

        BookWriter::create([
            'book_id'   => 6,
            'writer_id' => 5
        ]);

        BookWriter::create([
            'book_id'   => 7,
            'writer_id' => 5
        ]);

        BookWriter::create([
            'book_id'   => 8,
            'writer_id' => 6
        ]);

        BookWriter::create([
            'book_id'   => 9,
            'writer_id' => 7
        ]);

        BookWriter::create([
            'book_id'   => 10,
            'writer_id' => 8
        ]);

        BookWriter::create([
            'book_id'   => 11,
            'writer_id' => 8
        ]);

        BookWriter::create([
            'book_id'   => 12,
            'writer_id' => 9
        ]);

        BookWriter::create([
            'book_id'   => 13,
            'writer_id' => 10
        ]);

        BookWriter::create([
            'book_id'   => 14,
            'writer_id' => 10
        ]);

        BookWriter::create([
            'book_id'   => 15,
            'writer_id' => 11
        ]);

        BookWriter::create([
            'book_id'   => 16,
            'writer_id' => 12
        ]);

        BookWriter::create([
            'book_id'   => 17,
            'writer_id' => 12
        ]);

        BookWriter::create([
            'book_id'   => 18,
            'writer_id' => 13
        ]);

        BookWriter::create([
            'book_id'   => 19,
            'writer_id' => 14
        ]);

        BookWriter::create([
            'book_id'   => 20,
            'writer_id' => 15
        ]);
    }
}
