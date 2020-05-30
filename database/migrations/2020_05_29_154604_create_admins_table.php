<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {
    // 后台登录用户表
    public function up() {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50)->comment('账号');
            $table->string('password', 255)->comment('密码');
            $table->string('phone', 20)->default('')->comment('手机号码');
            $table->string('email', 100)->default('')->comment('邮箱');
            $table->string('truename', 20)->default('')->comment('真实姓名');
            $table->unsignedTinyInteger('age')->default(1)->comment('年龄');
            $table->enum('sex', ['男', '女'])->default('男')->comment('性别');
            $table->string('avatar', 200)->default('')->comment('头像');
            $table->char('last_ip', 15)->default('')->comment('最后登录ip');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('admins');
    }
}
