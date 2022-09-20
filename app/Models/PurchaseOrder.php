<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class PurchaseOrder extends Model
{
    use HasFactory;
    
    protected $fillable = ['order_sn', 'user_id', 'purchase_id', 'quoted_price', 'quoted_price_info', 'order_status', 'pay_status'];
}
