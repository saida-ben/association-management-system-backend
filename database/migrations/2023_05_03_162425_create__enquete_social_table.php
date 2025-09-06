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
        Schema::create('_enquete_social', function (Blueprint $table) {
            $table->id();
            $table->date('DATERECHERCHE');
            $table->string('residence');
            $table->string('nom');
            $table->string('prenom');
            $table->string('lieuN');
            $table->date('dateN');
            $table->string('nivSc');
            $table->string('Etat');
            $table->string('autre');
            $table->string('sante');
            $table->string('maladie');
            $table->string('nbrsoeur');
            $table->string('nbrfrere');
            $table->string('arrang');
           
            $table->timestamps();
            $table->foreign('residence')->references('residence')->on('_certificatde_log');
            $table->foreign('nom')->references('nom')->on('child');
            $table->foreign('prenom')->references('prenom')->on('child');
            $table->foreign('dateN')->references('dateN')->on('child');
            $table->foreign('lieuN')->references('prenom')->on('child');
            $table->foreign('nivSc')->references('nivSc')->on('_parcours_scolaires');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_enquete_social');
    }
};
