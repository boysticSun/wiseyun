<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PurchaseOrderAction;

class PurchaseOrderActionPolicy extends Policy
{
    public function update(User $user, PurchaseOrderAction $purchase_order_action)
    {
        // return $purchase_order_action->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, PurchaseOrderAction $purchase_order_action)
    {
        return true;
    }
}
