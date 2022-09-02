<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoodsType;
use App\Models\Supply;

class GoodsTypesController extends Controller
{
    //
    public function supplytypes(GoodsType $goodstype)
    {
        // 读取分类 ID 关联的供应，并按每 15 条分页
        $supplies = Supply::where('goods_type_id', $goodstype->id)->paginate(15);
        // 传参变量话题和分类到模板中
        return view('supplies.supply_types', compact('supplies', 'goodstype'));
    }
}
