<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');     //①自動採番、idや主キーに用いられる
            $table->string('title', 50);      //②文字型、string('カラム名', 数字)で文字数制限指定ができる。
            $table->string('body', 200);
            $table->timestamps();        //③作成日時と更新日時を自動で登録できる。
            $table->softDeletes();  //④削除日時を自動で登録
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
