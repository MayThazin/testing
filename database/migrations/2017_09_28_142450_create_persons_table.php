<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('pid');
            $table->string('name');
            $table->string('fathername');
            $table->string('nrc')->unique();
            $table->string('gender');
            $table->string('religion');
            $table->string('phonenumber');
            $table->string('email');
            $table->text('address');
            $table->text('biography');
            $table->integer('positionid')->unsigned();
            $table->integer('depid')->unsigned();
            $table->foreign('positionid')->references('positionid')->on('positions');
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
        Schema::dropIfExists('persons');
    }
}
