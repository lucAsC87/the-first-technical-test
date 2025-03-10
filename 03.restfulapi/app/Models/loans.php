<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    protected $fillable = [
        'book_id',
        'member_id',
        'loan_date',
        'returned_date'
    ];
}
