<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessageJeParticipeMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messagesJeParticipe', function (Blueprint $table) { // crée une BDD
            $table->bigIncrements('id');
            $table->string('nom', 30);
            $table->string('email', 50);
            $table->string('titreVideo', 100);
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
        //
    }
}
