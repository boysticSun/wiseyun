<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Dcat\Admin\Traits\ModelTree;

class NewsCategory extends Model
{
    use HasFactory;
    use ModelTree;

    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'pid',
    ];

    protected $titleColumn = 'name';

    protected $parentColumn = 'pid';

    public function parent()
    {
        return $this->belongsTo(self::class,'pid');
    }

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
