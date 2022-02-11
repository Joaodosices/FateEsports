<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nickname',100);
            $table->string('img');
            $table->unsignedBigInteger('id_game'); 
            $table->foreign('id_game')->references('id')->on('games');
            $table->unsignedBigInteger('id_user')->nullable(); 
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('upvotes')->default('0')->nullable();
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
