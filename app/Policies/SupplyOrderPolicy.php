<?php

namespace App\Policies;

use App\Models\User;
use App\Models\SupplyOrder;

class SupplyOrderPolicy extends Policy
{
    public function update(User $user, SupplyOrder $supply_order)
    {
        // return $supply_order->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, SupplyOrder $supply_order)
    {
        return true;
    }
}
