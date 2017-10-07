<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayCurriculumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_curriculums', function (Blueprint $table) {
            $table->increments('curriculumid');
            $table->integer('moduleid')->unsigned();
            $table->string('modulename');
            $table->integer('myanmar');
            $table->integer('english');
            $table->integer('geology');
            $table->integer('history');
            $table->integer('law');
            $table->integer('orientalstudies');
            $table->integer('philosophy');
            $table->integer('psychology');
            $table->integer('chemistry');
            $table->integer('physic');
            $table->integer('mathematic');
            $table->integer('zoology');
            $table->integer('botany');
            $table->integer('bio_chemistry');
            $table->foreign('moduleid')->references('moduleid')->on('day_syllabus');
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
        Schema::dropIfExists('day_curriculums');
    }
}
