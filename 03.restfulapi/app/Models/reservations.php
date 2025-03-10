<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $fillable = [
        'book_id',
        'member_id',
        'reservation_date',
        'availability_status_id'
    ];
}
