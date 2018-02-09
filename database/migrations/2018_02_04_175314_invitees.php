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
            $table->string('name')->nullable();
            $table->string('dietary_requirements')->nullable();
            $table->string('main_course')->nullable();
            $table->string('dessert_course')->nullable();
            $table->string('favourite_drink')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('invite_id')->references('id')->on('invites');
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
