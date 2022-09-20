<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	public function up()
	{
		Schema::create('supply_order_actions', function(Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('supply_order_id')->unsigned()->index();
            $table->string('order_sn')->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->tinyInteger('type')->default(0);
            $table->text('body');
            $table->tinyInteger('order_status')->default(0);
            $table->tinyInteger('pay_status')->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('supply_order_actions');
	}
};
