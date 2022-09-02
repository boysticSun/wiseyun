<?php

namespace Database\Factories;

use App\Models\Supply;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplyFactory extends Factory
{
    protected $model = Supply::class;

    public function definition()
    {
        return [
            'title'     =>  '供应产品示例数据',
            'body'      =>  '供应产品示例数据详情信息',
            'excerpt'   =>  '供应产品示例数据详情信息',
            'user_id'   =>  1,
            'goods_type_id'   =>  $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35]),
            'price_unit'=>  '年'
        ];
    }
}
