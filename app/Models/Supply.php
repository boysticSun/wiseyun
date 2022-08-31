<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supply extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'body', 'user_id', 'type_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];
}
