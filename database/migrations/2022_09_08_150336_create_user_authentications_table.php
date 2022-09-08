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
        Schema::create('user_authentications', function (Blueprint $table) {
            $table->id();
            $table->string('realname')->comment('真实姓名');
            $table->string('company_name')->comment('公司名称');
            $table->string('logo')->nullable()->comment('Logo');
            $table->text('brief')->nullable()->comment('企业简介');
            $table->tinyInteger('status')->comment('经营状态')->default(1);
            $table->string('credit_code')->comment('企业统一社会信用代码');
            $table->string('registered_capital')->comment('注册资本');
            $table->string('legal_representative')->comment('法定代表人');
            $table->string('industry')->comment('所属行业');
            $table->string('establish_date')->comment('成立时间');
            $table->string('approval_date')->comment('核准日期');
            $table->string('type')->comment('公司类型');
            $table->string('address')->comment('企业地址');
            $table->string('registration_authority')->comment('登记机关');
            $table->text('business_scope')->comment('经营范围');
            $table->string('staff_size')->nullable()->comment('人员规模');
            $table->text('qualifications')->nullable()->comment('获得资质');
            $table->tinyInteger('examine_status')->comment('审核状态')->default(0);
            $table->dateTime('examine_at')->nullable()->comment('审核时间');
            $table->dateTime('reject_at')->nullable()->comment('驳回时间');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_authentications');
    }
};
