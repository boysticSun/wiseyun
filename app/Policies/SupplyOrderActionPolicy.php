<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SupplyOrderAction;

class SupplyOrderActionPolicy extends Policy
{
    public function update(User $user, SupplyOrderAction $supply_order_action)
    {
        // return $supply_order_action->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, SupplyOrderAction $supply_order_action)
    {
        return true;
    }
}
