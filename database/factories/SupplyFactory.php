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
            'title'     =>  '供应产品示例数据' . $this->faker->sentence(5, true),
            'body'      =>  '供应产品示例数据详情信息' . $this->faker->paragraph(5, true),
            'excerpt'   =>  $this->faker->sentence(10, true),
            'user_id'   =>  $this->faker->numberBetween(1, 100),
            'goods_type_id'   =>  $this->faker->numberBetween(1, 35),
            'price_unit'=>  $this->faker->randomElement(['年', '月', '日', '次'])
        ];
    }
}
