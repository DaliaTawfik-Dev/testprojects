<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Next extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'price',
        'address',
        'notes',
    ];
}
