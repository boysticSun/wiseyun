<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Purchase;

class PurchasePolicy extends Policy
{
    public function update(User $user, Purchase $purchase)
    {
        // return $purchase->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Purchase $purchase)
    {
        return true;
    }
}
