<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name', 'description', 'user_count',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function updateUserCount()
    {
        $this->user_count = $this->users->count();
        $this->save();
    }
}
