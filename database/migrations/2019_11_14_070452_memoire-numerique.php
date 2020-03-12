<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MemoireNumerique extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memoire', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre', 255);
            $table->string('resumer', 255);
            $table->string('description', 255);
            $table->string('auteur', 255);
            $table->integer('id_categorie');
            $table->integer('id_mediatype');
            $table->string('video', 255);
            $table->string('image', 255);
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
        Schema::dropIfExists('memoire');
    }
}
