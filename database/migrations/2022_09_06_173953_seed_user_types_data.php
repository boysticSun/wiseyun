<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
        $usertypes = [
            [
                'name'        => '工业企业',
                'description' => '工业企业用户',
            ],
            [
                'name'        => '解决方案商',
                'description' => '解决方案商用户',
            ],
            [
                'name'        => '服务商',
                'description' => '服务商用户',
            ],

        ];

        DB::table('user_types')->insert($usertypes);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('user_types')->truncate();
    }
};
