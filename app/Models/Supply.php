<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supply extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'price', 'price_unit', 'is_negotiable', 'thumb', 'validity', 'is_indefinitely', 'order', 'slug', 'view_count'];

    public function goods_types()
    {
        return $this->belongsToMany(GoodsType::class)->using(GoodsTypeSupply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
