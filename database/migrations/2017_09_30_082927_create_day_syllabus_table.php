<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaySyllabusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_syllabus', function (Blueprint $table) {
            $table->increments('moduleid');
            $table->string('modulename');
            $table->longText('course');
            $table->longText('reference');
            $table->integer('depid')->unsigned();
            $table->foreign('depid')->references('depid')->on('departments');
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
        Schema::dropIfExists('day_syllabus');
    }
}
