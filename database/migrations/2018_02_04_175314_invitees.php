<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invitees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('invite_id')->unsigned();
            $table->string('name');
            $table->string('dietary_requirements');
            $table->string('main_course');
            $table->string('dessert_course');
            $table->json('drinks');
            $table->timestamps();

            $table->foreign('invite_id')
                  ->references('id')
                  ->on('invites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('invitees');
    }
}
