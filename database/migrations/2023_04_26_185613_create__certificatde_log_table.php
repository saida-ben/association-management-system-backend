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
        Schema::create('_certificatde_log', function (Blueprint $table) {
            $table->id();
            $table->string('responsable');
            $table->string('nP');
            $table->string('pP');
            $table->string('nM');
            $table->string('pM');
            $table->string('nomB');
            $table->string('prenomB');
            $table->date('dN');
            $table->string('lN');
            $table->string('cin');
            $table->string('tel');
            $table->string('etatF');
            $table->string('profession');
            $table->string('residence');
            $table->date('DateL');
            $table->timestamps();
        
            $table->foreign('nP')->references('nomP')->on('child')->onDelete('cascade');
            $table->foreign('pP')->references('prenomP')->on('child')->onDelete('cascade');
            $table->foreign('nM')->references('nomM')->on('child')->onDelete('cascade');
            $table->foreign('pM')->references('prenomM')->on('child')->onDelete('cascade');
            $table->foreign('nomB')->references('nom')->on('child')->onDelete('cascade');
            $table->foreign('prenomB')->references('prenom')->on('child')->onDelete('cascade');
            $table->foreign('dN')->references('dateN')->on('child')->onDelete('cascade');
            $table->foreign('lN')->references('lieuN')->on('child')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_certificatde_log');
    }
};
