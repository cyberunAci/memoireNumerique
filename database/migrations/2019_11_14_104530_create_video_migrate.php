<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoMigrate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_migrate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre', 255);
            $table->string('resumer');
            $table->string('description');
            $table->string('auteur');
            $table->string('id_categorie');
            $table->string('id_mediatype');
            $table->string('video');
            $table->string('image');
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
        Schema::dropIfExists('video_migrate');
    }
}
