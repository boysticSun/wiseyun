<?php

namespace App\Admin\Repositories;

use App\Models\Purchase as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Purchase extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function goods_types()
    {
        return $this->belongsToMany(GoodsType::class);
    }

}
