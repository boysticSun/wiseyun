<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupplyOrderAction extends Model
{
    use HasFactory;
    
    protected $fillable = ['supply_order_id', 'order_sn', 'user_id', 'type', 'body', 'order_status', 'pay_status'];
}
