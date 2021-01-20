<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class authorsModel extends Model
{
    protected $table = "authors";

    protected $fillable2 = [
        'authors_id',
        'author_name',
        'count_books'

    ];
}
