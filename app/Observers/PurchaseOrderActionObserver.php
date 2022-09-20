<?php

namespace App\Observers;

use App\Models\PurchaseOrderAction;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PurchaseOrderActionObserver
{
    public function creating(PurchaseOrderAction $purchase_order_action)
    {
        //
    }

    public function updating(PurchaseOrderAction $purchase_order_action)
    {
        //
    }
}