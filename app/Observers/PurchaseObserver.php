<?php

namespace App\Observers;

use App\Models\Purchase;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PurchaseObserver
{
    public function creating(Purchase $purchase)
    {
        //
    }

    public function updating(Purchase $purchase)
    {
        //
    }

    public function created(Purchase $purchase)
    {
        // foreach($purchase->goods_types as $val)
        // {
        //     $val->updatePurchaseCount();
        // }
    }
}
