<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 生成数据集合
        User::factory()->count(100)->create();

        // 单独处理第一个用户的数据
        $user = User::find(1);
        $user->name = '无心听风';
        $user->email = '578863588@qq.com';
        $user->mobile = '18745791650';
        $user->user_authentication_id = 1;
        $user->save();

        for ($i=2; $i<=100; $i++)
        {
            $user = User::find($i);
            $user->user_authentication_id = $i;
            $user->save();
        }
    }
}
