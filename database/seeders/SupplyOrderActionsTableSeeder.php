<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupplyOrderAction;

class SupplyOrderActionsTableSeeder extends Seeder
{
    public function run()
    {
        SupplyOrderAction::factory()->count(10)->create();
    }
}

