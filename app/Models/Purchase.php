<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'user_id', 'goods_type_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'thumb', 'validity', 'is_indefinitely', 'excerpt', 'slug'];

    public function goods_type()
    {
        return $this->belongsTo(GoodsType::class);
    }
}
