<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentReplysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_replys', function (Blueprint $table) {
            $table->increments('replyid');
            $table->integer('postid')->unsigned();
            $table->integer('commentid')->unsigned();
            $table->longText('commentreply');
            $table->string('gmail');
            $table->date('replydate');
            $table->foreign('postid')->references('postid')->on('posts');
            $table->foreign('commentid')->references('commentid')->on('comments');
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
        Schema::dropIfExists('comment_replys');
    }
}
