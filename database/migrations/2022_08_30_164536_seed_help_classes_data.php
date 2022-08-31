<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        $classes = [
            [
                'name'        => '注册与购买',
                'pid'         => 0,
            ],
            [
                'name'        => '备案问题',
                'pid'         => 0,
            ],
            [
                'name'        => '云服务器问题',
                'pid'         => 0,
            ],
            [
                'name'        => '使用规则',
                'pid'         => 0,
            ],
            [
                'name'        => '账户问题',
                'pid'         => 1,
            ],
            [
                'name'        => '选购指南',
                'pid'         => 1,
            ],
            [
                'name'        => '付款结算',
                'pid'         => 1,
            ],
            [
                'name'        => '合同及发票',
                'pid'         => 1,
            ],
            [
                'name'        => '备案指南',
                'pid'         => 2,
            ],
            [
                'name'        => '管局备案要求',
                'pid'         => 2,
            ],
            [
                'name'        => '前置审批说明',
                'pid'         => 2,
            ],
            [
                'name'        => '法律法规',
                'pid'         => 2,
            ],
            [
                'name'        => '控制台使用',
                'pid'         => 3,
            ],
            [
                'name'        => '基础类问题',
                'pid'         => 3,
            ],
            [
                'name'        => '应用类问题',
                'pid'         => 3,
            ],
            [
                'name'        => '网络类问题',
                'pid'         => 3,
            ],
            [
                'name'        => '安全类问题',
                'pid'         => 3,
            ],
            [
                'name'        => '常见问题',
                'pid'         => 4,
            ],
            [
                'name'        => '规则说明',
                'pid'         => 4,
            ],
            [
                'name'        => '总规',
                'pid'         => 4,
            ],
            [
                'name'        => '信息安全处罚规则',
                'pid'         => 4,
            ],
            [
                'name'        => '法律法规',
                'pid'         => 4,
            ],
        ];

        DB::table('help_classes')->insert($classes);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('help_classes')->truncate();
    }
};
