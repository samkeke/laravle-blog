<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWxSpidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wx_spiders', function (Blueprint $table) {
            $table->id();
            $table->string('token' , 100)->default('')->comment('微信登陆token');
            $table->tinyInteger('status')->default(0)->comment('状态（0 未开始  1爬取完成  2 无数据 3爬虫失败）');
            $table->string('qrimg' , 2000)->default('')->comment('登陆二维码图片地址');
            $table->integer('proxy_key')->default(0)->comment('代理IP key');
            $table->integer('ua_key')->default(0)->comment('代理ua key');
            $table->string('cookie_file' , 2000)->default('')->comment('微信登陆cookie 地址');
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
        Schema::dropIfExists('wx_spiders');
    }
}
