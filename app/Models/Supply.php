<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'type_id', 'price', 'price_unit', 'is_negotiable', 'thumb', 'validity', 'is_indefinitely', 'order', 'slug'];
}
