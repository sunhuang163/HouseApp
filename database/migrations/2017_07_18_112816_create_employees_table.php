<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id")->unsigned()->comment("一对一user id");
            $table->integer("department_id")->unsigned()->comment("部门");
            $table->integer("title_id")->unsigned()->comment("职位");
            $table->integer("employee_statuses_id")->unsigned()->comment("状态");
            $table->integer("sex_id")->unsigned()->comment("性别");
            $table->string("c_name")->comment("中文名");
            $table->string("e_name")->comment("英文名");
            $table->string("mobile_macau",8)->comment("澳门电话");
            $table->string("mobile_china",8)->nullable()->comment("大陆电话");
            $table->string("CID",20)->unique()->comment("身份证");
            $table->string("address")->comment("住址");
            $table->datetime("birthday")->comment("生日");
            $table->string("photo")->comment("相片");
            $table->integer("contract_period")->default(3)->comment("合约期");
            $table->integer("supervisor_id")->nullable()->comment("上级");

            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("department_id")->references("id")->on("departments");
            $table->foreign("title_id")->references("id")->on("titles");
            $table->foreign("employee_statuses_id")->references("id")->on("employee_statuses");


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
        Schema::dropIfExists('employees');
    }
}
