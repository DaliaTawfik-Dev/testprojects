<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mm extends Model
{
    use HasFactory;
    protected $fillable=[
        'add_date',
        'item',
        'item_code',
        'quantity',
        'weight',
        'batch_number',
        'pr_data',
        'xpe_date',
        'notes',
    ];

}
