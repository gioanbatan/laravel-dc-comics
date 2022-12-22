<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'series', 'type', 'sale_date', 'price', 'description', 'thumb'
    ];
}
