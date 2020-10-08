<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArticleOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->nullable()->unsigned();
            $table->foreign('order_id')->references('id')->on('categories');
            $table->foreignId('article_id')->nullable()->unsigned();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->string('price');
            $table->integer('qty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_order');
    }
}
