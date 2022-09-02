<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'pid',
    ];

    public function child()
    {
        return $this->hasMany(self::class,'pid');
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function updateNewsCount()
    {
        $this->post_count = $this->news->count();
        $this->save();
    }
}
