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
        return $this->belongsToMany(Supply::class);
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class);
    }

    public function goodsTypeSupplies()
    {
        return $this->hasMany(GoodsTypeSupply::class);
    }

    public function goodsTypePurchases()
    {
        return $this->hasMany(GoodsTypePurchase::class);
    }

    public function updateSupplyCount()
    {
        $this->supply_count = $this->goodsTypeSupplies->count();
        $this->save();
    }

    public function updatePurchaseCount()
    {
        $this->purchase_count = $this->goodsTypePurchases->count();
        $this->save();
    }
}
