<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	public function up()
	{
		Schema::create('purchase_orders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('order_sn')->index();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('purchase_id')->unsigned()->index();
            $table->decimal('quoted_price')->unsigned()->default(0.00);
            $table->text('quoted_price_info');
            $table->tinyInteger('order_status')->default(0);
            $table->tinyInteger('pay_status')->default(0);
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('purchase_orders');
	}
};
