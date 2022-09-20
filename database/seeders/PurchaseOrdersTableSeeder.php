<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PurchaseOrder;

class PurchaseOrdersTableSeeder extends Seeder
{
    public function run()
    {
        PurchaseOrder::factory()->count(10)->create();
    }
}

