<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoodsTypePurchase;

class GoodsTypePurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('goods_type_purchase')->delete();

        $data = array();
        $cates = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35);
        for($i=1;$i<=500;$i++)
        {
            $len = rand(1,10);
            $check = array_rand($cates, $len);

            if(is_array($check))
            {
                foreach ($check as $val)
                {
                    $data = array(
                        'goods_type_id' =>  $cates[$val],
                        'purchase_id' =>  $i
                    );
                    GoodsTypePurchase::create($data);
                }
            }
            else
            {
                $data = array(
                    'goods_type_id' =>  $cates[$check],
                    'purchase_id' =>  $i
                );
                GoodsTypePurchase::create($data);
            }

        }
    }
}
