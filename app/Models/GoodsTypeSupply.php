<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class GoodsTypeSupply extends Pivot
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['goods_type_id', 'supply_id'];

    public function goods_type()
    {
        return $this->belongsTo(GoodsType::class);
    }
}
