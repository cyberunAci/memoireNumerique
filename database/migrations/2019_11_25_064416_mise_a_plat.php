<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MiseAPlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //va chercher la table memoire et efface les colonne video et image

        Schema::table('memoire', function (Blueprint $table) {
            $table->dropColumn(['video', 'image', 'id_mediatype']);
        });

        Schema::dropIfExists('media');


        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('video', 255);
            $table->string('image', 255);
            $table->unsignedBigInteger('id_type');
            $table->foreign('id_type')->references('id')->on('mediatype');
        });

        Schema::dropIfExists('memoire_status');
        Schema::create('memoire_status', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status', 255);
        });

        Schema::table('memoire', function (Blueprint $table) {
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id')->on('memoire_status');
            $table->unsignedBigInteger('id_categorie')->nullable()->change();
            $table->foreign('id_categorie')->references('id')->on('categorie');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id')->on('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('memoire', function (Blueprint $table) {
            $table->dropForeign(['id_status']);
            $table->dropForeign(['id_categorie']);
            $table->dropForeign(['id_media']);
            $table->dropIfExists('id_status');
            $table->dropIfExists('id_media');
            $table->dropIfExists('id_categorie');
            $table->string('video', 255);
            $table->string('image', 255);
            $table->integer('id_mediatype');
        });

        Schema::dropIfExists('media');

        Schema::dropIfExists('memoire_status');
    }
}
