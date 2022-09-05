<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoodsType;
use App\Models\Supply;

class GoodsTypesController extends Controller
{
    public function index()
    {
        $isall = 1;
        $goodstypes = GoodsType::all();
        $supplies = Supply::where('goods_type_id', '>=', 0)->paginate(15);
        // 传参变量话题和分类到模板中
        return view('supplies.supply_types', compact('supplies', 'goodstypes', 'isall'));
    }
    //
    public function supplytypes(GoodsType $goodstype)
    {
        $isall = 0;
        $goodstypes = GoodsType::all();
        if(!empty($goodstypes))
        {
            foreach($goodstypes as $key=>$val)
            {
                $goodstypes[$key]->active = '';
                if($val->id == $goodstype->id)
                {
                    $goodstypes[$key]->active = ' active';
                }
            }
        }
        // 读取分类 ID 关联的供应，并按每 15 条分页
        $supplies = Supply::where('goods_type_id', $goodstype->id)->paginate(15);
        // 传参变量话题和分类到模板中
        return view('supplies.supply_types', compact('supplies', 'goodstypes', 'isall'));
    }
}
