<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'e_mail',
        'telephone',
        'member_status_id'
    ];
}
