<?php

namespace App\Observers;

use App\Models\GoodsTypeSupply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class GoodsTypeSupplyObserver
{
    public function creating(GoodsTypeSupply $supply)
    {
        //
    }

    public function updating(GoodsTypeSupply $supply)
    {
        //
    }

    public function created(GoodsTypeSupply $supply)
    {
        $supply->goods_type->updateSupplyCount();
    }
}
