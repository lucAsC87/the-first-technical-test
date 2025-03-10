<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'title',
        'author_id',
        'category_id',
        'availability_id',
        'publication_date',
        'copies_owned'
    ];

    protected $cast = [
        'copies_owned' => 'integer'
    ];
}
