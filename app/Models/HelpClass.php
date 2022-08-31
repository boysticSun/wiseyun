<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpClass extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'pid',
    ];

    public function child()
    {
        return $this->hasMany(self::class,'pid');
    }
}
