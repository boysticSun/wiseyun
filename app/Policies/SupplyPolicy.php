<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Supply;

class SupplyPolicy extends Policy
{
    public function update(User $user, Supply $supply)
    {
        return $user->isAuthorOf($news);
        // return true;
    }

    public function destroy(User $user, Supply $supply)
    {
        return $user->isAuthorOf($news);
        // return true;
    }
}
