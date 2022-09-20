<?php

namespace App\Observers;

use App\Models\PurchaseOrder;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class PurchaseOrderObserver
{
    public function creating(PurchaseOrder $purchase_order)
    {
        //
    }

    public function updating(PurchaseOrder $purchase_order)
    {
        //
    }
}