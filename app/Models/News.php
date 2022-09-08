<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumb', 'body', 'news_category_id', 'excerpt', 'slug'];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function news_category()
    {
        return $this->belongsTo(NewsCategory::class);
    }
}
