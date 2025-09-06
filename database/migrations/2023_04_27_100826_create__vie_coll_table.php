<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_vie_coll', function (Blueprint $table) {
           $table->string('num');
            $table->string('nomB');
            $table->string('prenomB');
            $table->string('pP');
            $table->string('pM');
            $table->date('dateN');
            $table->string('lieuN');
            $table->timestamps();
            $table->foreign('nomB')->references('nom')->on('child');
            $table->foreign('prenomB')->references('prenom')->on('child');
            $table->foreign('pP')->references('prenomP')->on('child');
            $table->foreign('pM')->references('prenomM')->on('child');
            $table->foreign('lieuN')->references('lieuN')->on('child');
            $table->foreign('dateN')->references('dateN')->on('child');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_vie_coll');
    }
};
