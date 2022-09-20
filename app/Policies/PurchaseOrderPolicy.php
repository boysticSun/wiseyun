<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PurchaseOrder;

class PurchaseOrderPolicy extends Policy
{
    public function update(User $user, PurchaseOrder $purchase_order)
    {
        // return $purchase_order->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, PurchaseOrder $purchase_order)
    {
        return true;
    }
}
