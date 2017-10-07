<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('postid');
            $table->integer('depid')->unsigned();
            $table->text('posttitle');
            $table->text('postcontent');
            $table->integer('createduser')->unsigned();
            $table->integer('modifieduser')->unsigned();
            $table->foreign('depid')->references('depid')->on('departments');
            $table->foreign('createduser')->references('id')->on('users'); 
            $table->foreign('modifieduser')->references('id')->on('users');            
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
        Schema::dropIfExists('posts');
    }
}
