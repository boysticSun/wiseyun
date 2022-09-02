<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'goods_type_id', 'price', 'price_unit', 'is_negotiable', 'thumb', 'validity', 'is_indefinitely', 'order', 'slug'];

    public function goods_type()
    {
        return $this->belongsTo(GoodsType::class);
    }
}
