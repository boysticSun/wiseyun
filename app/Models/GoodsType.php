<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodsType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function updateSupplyCount()
    {
        $this->supply_count = $this->supplies->count();
        $this->save();
    }

    public function updatePurchaseCount()
    {
        $this->purchase_count = $this->purchases->count();
        $this->save();
    }
}
