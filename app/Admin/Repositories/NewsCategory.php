<?php

namespace App\Admin\Repositories;

use App\Models\NewsCategory as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class NewsCategory extends EloquentRepository
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
}
