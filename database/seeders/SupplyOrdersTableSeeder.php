<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupplyOrder;

class SupplyOrdersTableSeeder extends Seeder
{
    public function run()
    {
        SupplyOrder::factory()->count(10)->create();
    }
}

