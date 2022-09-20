<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	public function up()
	{
		Schema::create('supply_orders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('order_sn')->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('supply_id')->unsigned()->index();
            $table->decimal('total_price')->unsigned()->default(0.00);
            $table->text('remark');
            $table->tinyInteger('order_status')->default(0);
            $table->tinyInteger('pay_status')->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('supply_orders');
	}
};
