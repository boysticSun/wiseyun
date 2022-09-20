<?php

namespace App\Observers;

use App\Models\SupplyOrderAction;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class SupplyOrderActionObserver
{
    public function creating(SupplyOrderAction $supply_order_action)
    {
        //
    }

    public function updating(SupplyOrderAction $supply_order_action)
    {
        //
    }
}