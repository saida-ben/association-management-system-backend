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
        Schema::create('_att_etat_civil', function (Blueprint $table) {
            $table->id();
            $table->string('off');
            $table->string('nomB');
            $table->string('prenomB');
            $table->string('residence');
            $table->string('th');
            $table->date('dC');
            $table->date('C');
            $table->string('nP');
            $table->string('pP');
            $table->string('nM');
            $table->string('pM');
            $table->timestamps();
            $table->foreign('nomB')->references('nom')->on('child');
            $table->foreign('prenomB')->references('prenom')->on('child');
            $table->foreign('nP')->references('nomP')->on('child');
            $table->foreign('pP')->references('prenomP')->on('child');
            $table->foreign('nM')->references('nomM')->on('child');
            $table->foreign('pM')->references('prenomM')->on('child');
            $table->foreign('residence')->references('residence')->on('_certificatde_log');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_att_etat_civil');
    }
};
