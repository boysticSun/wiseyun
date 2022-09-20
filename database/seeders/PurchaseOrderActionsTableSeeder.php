<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseOrderAction;

class PurchaseOrderActionsTableSeeder extends Seeder
{
    public function run()
    {
        PurchaseOrderAction::factory()->count(10)->create();
    }
}

