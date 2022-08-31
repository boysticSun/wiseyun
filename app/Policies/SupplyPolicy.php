<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Supply;

class SupplyPolicy extends Policy
{
    public function update(User $user, Supply $supply)
    {
        // return $supply->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Supply $supply)
    {
        return true;
    }
}
