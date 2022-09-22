<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupplyOrder extends Model
{
    use HasFactory;

    protected $fillable = ['order_sn', 'user_id', 'supply_id', 'total_price', 'remark', 'order_status', 'pay_status'];

    public function supply()
    {
        return $this->belongsTo(Supply::class);
    }
}
