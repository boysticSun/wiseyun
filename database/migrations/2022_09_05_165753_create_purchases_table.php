<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	public function up()
	{
		Schema::create('purchases', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->index()->comment('标题');
            $table->text('body')->comment('详情');
            $table->bigInteger('user_id')->unsigned()->index()->comment('用户ID');
            $table->integer('reply_count')->unsigned()->default(0)->comment('回复数');
            $table->integer('view_count')->unsigned()->default(0)->comment('查看数');
            $table->integer('last_reply_user_id')->unsigned()->default(0)->comment('最后回复用户');
            $table->integer('order')->unsigned()->default(0)->comment('排序');
            $table->string('thumb')->nullable()->comment('图片');
            $table->string('validity')->nullable()->comment('有效期至');
            $table->tinyInteger('is_indefinitely')->default(0)->comment('是否长期');
            $table->text('excerpt')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('purchases');
	}
};
