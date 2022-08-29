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
                'name'        => '今日热点',
                'description' => '今日热点新闻资讯',
            ],
            [
                'name'        => '行业动态',
                'description' => '行业动态新闻资讯',
            ],
            [
                'name'        => '政策发布',
                'description' => '政策发布新闻资讯',
            ],
            [
                'name'        => '疫情资讯',
                'description' => '疫情资讯信息',
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
