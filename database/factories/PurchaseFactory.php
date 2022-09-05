<?php

namespace Database\Factories;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseFactory extends Factory
{
    protected $model = Purchase::class;

    public function definition()
    {
        return [
            'title'     =>  '采购产品示例数据',
            'body'      =>  '采购产品示例数据详情信息采购产品示例数据详情信息采购产品示例数据详情信息采购产品示例数据详情信息采购产品示例数据详情信息',
            'excerpt'   =>  '采购产品示例数据详情信息',
            'user_id'   =>  1,
            'goods_type_id'   =>  $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35]),
            'is_indefinitely'   =>  1
        ];
    }
}
