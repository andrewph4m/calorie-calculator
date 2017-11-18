<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->string('gender');
            $table->string('activity_option');
            $table->string('activity_factor');
            $table->string('estimated_kcal');
            $table->string('target_kcal');
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
        Schema::drop('respondents');
    }
}
