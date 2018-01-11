<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lastname');
            $table->string('firstname');
            $table->integer('age');
            $table->string('country');
            $table->string('position');
            $table->integer('team_id');
            $table->integer('number');
            $table->text('description');
            $table->text('photo');
            $table->integer('goals');
            $table->integer('assists');
            $table->integer('yellow_cards');
            $table->integer('red_cards');
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
        Schema::dropIfExists('players');
    }
}
