<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::dropIfExists('questions');
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('surveyid')->unsigned()->index()->nullable();
            $table->bigInteger('typeid')->unsigned()->index()->nullable();

            $table->foreign('surveyid')->references('id')->on('surveys');
            $table->foreign('typeid')->references('id')->on('question_types');
            $table->string('question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
