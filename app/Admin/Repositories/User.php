<?php

namespace App\Admin\Repositories;

use App\Models\User as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class User extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function user_type()
    {
        return $this->belongsTo(UserType::class);
    }
}
