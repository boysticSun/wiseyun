<?php

namespace App\Admin\Repositories;

use App\Models\GoodsType as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class GoodsType extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }
}
