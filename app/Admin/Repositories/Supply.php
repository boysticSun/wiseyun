<?php

namespace App\Admin\Repositories;

use App\Models\Supply as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Supply extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function goods_type()
    {
        return $this->belongsTo(GoodsType::class);
    }
}
