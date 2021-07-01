<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('orgid')->unsigned()->index()->nullable();
            $table->bigInteger('accesslevel')->unsigned()->index()->nullable();

            $table->foreign('orgid')->references('id')->on('organisations');
            $table->foreign('accesslevel')->references('id')->on('access_levels');
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('jobtitle')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
