<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessageJeparticipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages_jeparticipe', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom', 50);
            $table->string('email', 255);
            $table->string('titreVideo', 255);
            $table->string('descriptionVideo');
            $table->string('lienVideo');
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
        Schema::dropIfExists('messages_jeparticipe');
    }
}
