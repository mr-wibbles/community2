<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists(table('projects'));
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('orgid')->unsigned()->index()->nullable();
            $table->bigInteger('accesslevelrequired')->unsigned()->index()->nullable();

            $table->foreign('orgid')->references('id')->on('organisations');
            $table->foreign('accesslevelrequired')->references('id')->on('access_levels');
            $table->string('title');
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
        Schema::dropIfExists('projects');
    }
}
