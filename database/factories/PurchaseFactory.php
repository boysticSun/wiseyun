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
            'title'     =>  '采购产品示例数据' . $this->faker->sentence(5, true),
            'body'      =>  '采购产品示例数据详情信息' . $this->faker->paragraph(5, true),
            'excerpt'   =>  $this->faker->sentence(10, true),
            'user_id'   =>  $this->faker->numberBetween(1, 100),
            'is_indefinitely'   =>  1
        ];
    }
}
