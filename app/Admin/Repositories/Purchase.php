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
}
