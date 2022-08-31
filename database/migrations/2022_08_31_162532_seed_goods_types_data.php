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
        $types = [
            [
                'name'        => '厨房用品',
            ],
            [
                'name'        => '电子产品',
            ],
            [
                'name'        => '化学用品',
            ],
            [
                'name'        => '机械设备',
            ],
            [
                'name'        => '家居工艺品',
            ],
            [
                'name'        => '家用电器',
            ],
            [
                'name'        => '建筑材料',
            ],
            [
                'name'        => '健身器材',
            ],
            [
                'name'        => '教育娱乐',
            ],
            [
                'name'        => '皮具箱包',
            ],
            [
                'name'        => '食品加工',
            ],
            [
                'name'        => '手工具',
            ],
            [
                'name'        => '手工器械',
            ],
            [
                'name'        => '文具办公用品',
            ],
            [
                'name'        => '五金工具',
            ],
            [
                'name'        => '医疗器械',
            ],
            [
                'name'        => '机械制造',
            ],
            [
                'name'        => '珠宝玉器',
            ],
            [
                'name'        => '服装皮革',
            ],
            [
                'name'        => '家具制造',
            ],
            [
                'name'        => '包装印刷',
            ],
            [
                'name'        => '石学纤维制',
            ],
            [
                'name'        => '医药生产',
            ],
            [
                'name'        => '体育用品',
            ],
            [
                'name'        => '资质认证',
            ],
            [
                'name'        => '软件服务',
            ],
            [
                'name'        => '网站建设',
            ],
            [
                'name'        => '云主机',
            ],
            [
                'name'        => '云安全',
            ],
            [
                'name'        => '星级上云',
            ],
            [
                'name'        => '企业服务',
            ],
            [
                'name'        => '电力设备',
            ],
            [
                'name'        => '电力设施',
            ],
            [
                'name'        => '照明行业',
            ],
            [
                'name'        => '其他',
            ],
        ];

        DB::table('goods_types')->insert($types);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('goods_types')->truncate();
    }
};
