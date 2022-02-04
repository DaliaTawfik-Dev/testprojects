<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gitout extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'price',
        'address',
        'notes',

    ];

}
