<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'category',
        'series',
        'image_path'
    ];

    public function getWriters()
    {
        return DB::table('writers')->join('book_writers', 'writer_id', 'writers.id')->where('book_id', $this->id)->pluck('name');
    }

    public function getCategoryName()
    {
        return DB::table('categories')->where('id', $this->category_id)->value('category');
    }

    public function addDataToBook()
    {   
        $this->category = $this->getCategoryName();
        $this->writers = $this->getWriters();
    }
}
