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
        $newscategories = [
            [
                'name'        => '新闻资讯',
                'description' => '热点、热门、实时新闻资讯信息',
                'pid'         => 0,
            ],
            [
                'name'        => '今日热点',
                'description' => '今日最热点、热门、实时新闻资讯',
                'pid'         => 1,
            ],
            [
                'name'        => '行业动态',
                'description' => '行业内最新动态新闻资讯',
                'pid'         => 1,
            ],
            [
                'name'        => '政策发布',
                'description' => '权威发布政策相关新闻资讯',
                'pid'         => 1,
            ],
            [
                'name'        => '疫情资讯',
                'description' => '疫情资讯相关新闻信息',
                'pid'         => 1,
            ],
            [
                'name'        => '政策解读',
                'description' => '政策信息权威解读',
                'pid'         => 0,
            ],
        ];

        DB::table('news_categories')->insert($newscategories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('news_categories')->truncate();
    }
};
