<?php

namespace App\Observers;

use App\Models\Supply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class SupplyObserver
{
    public function creating(Supply $supply)
    {
        //
    }

    public function updating(Supply $supply)
    {
        //
    }

    public function saving(Supply $supply)
    {
        $supply->body = clean($supply->body, 'user_supply_body');
    }

    public function created(Supply $supply)
    {

        // foreach($supply->goods_types as $val)
        // {
        //     $val->updateSupplyCount();
        // }
    }
}
