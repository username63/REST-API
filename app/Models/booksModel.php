<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class booksModel extends Model
{
    protected $table = "books";

    public $timestamps = false;

    protected $fillable = [
        'book_id',
        'book_name',
        'author_name'
    ];
}
