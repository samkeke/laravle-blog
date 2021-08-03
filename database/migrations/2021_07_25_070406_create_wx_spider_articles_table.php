<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWxSpiderArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wx_spider_articles', function (Blueprint $table) {
            $table->id();
            $table->string('aid' , 200)->default('')->comment('微信文章aid');
            $table->string('appmsgid' , 200)->default('')->comment('');
            $table->string('cover' , 700)->default('')->comment('下载完成之后的缩略图');
            $table->date('wx_create_time')->comment('微信文章创建时间');
            $table->string('digest' , 2000)->default('')->comment('文章描述');
            $table->string('link' , 1000)->default('')->comment('采集地址');
            $table->string('title' , 1000)->default('')->comment('标题');
            $table->tinyInteger('status')->default(0)->comment('爬虫状态（0未爬取 1 爬取中 2已完成）');
            $table->string('content_url',2000)->default('')->comment('内容地址');
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
        Schema::dropIfExists('wx_spider_articles');
    }
}
