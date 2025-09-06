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
        Schema::create('_besoin', function (Blueprint $table) {
            $table->id();
            $table->string('etat');
            $table->string('nomB'); 
            $table->string('prenomB');
            $table->date('dateN');
            $table->string('lieuN');
            $table->string('pP');
            $table->string('nP');
            $table->string('pM');
            $table->string('nM');
            $table->string('profession');
            $table->string('cin');
            $table->date('dB');
            $table->string('lieu');
           
            

            $table->timestamps();
            $table->foreign('nomB')->references('nom')->on('child');
            $table->foreign('prenomB')->references('prenom')->on('child');
            $table->foreign('pP')->references('prenomP')->on('child');
            $table->foreign('pM')->references('prenomM')->on('child');
            $table->foreign('lieuN')->references('lieuN')->on('child');
            $table->foreign('dateN')->references('dateN')->on('child');
            $table->foreign('nP')->references('nomP')->on('child');
            $table->foreign('nM')->references('nomM')->on('child');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_besoin');
    }
};
