<?php

namespace App\Observers;

use App\Models\GoodsTypePurchase;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class GoodsTypePurchaseObserver
{
    public function creating(GoodsTypePurchase $purchase)
    {
        //
    }

    public function updating(GoodsTypePurchase $purchase)
    {
        //
    }

    public function created(GoodsTypePurchase $purchase)
    {
        $purchase->goods_type->updatePurchaseCount();
    }
}
