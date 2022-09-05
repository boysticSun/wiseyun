<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchasesTableSeeder extends Seeder
{
    public function run()
    {
        Purchase::factory()->count(500)->create();
    }
}

