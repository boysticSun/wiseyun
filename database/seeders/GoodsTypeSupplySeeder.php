<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoodsTypeSupply;

class GoodsTypeSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('goods_type_supply')->delete();

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
                        'supply_id' =>  $i
                    );
                    GoodsTypeSupply::create($data);
                }
            }
            else
            {
                $data = array(
                    'goods_type_id' =>  $cates[$check],
                    'supply_id' =>  $i
                );
                GoodsTypeSupply::create($data);
            }
        }
    }
}
