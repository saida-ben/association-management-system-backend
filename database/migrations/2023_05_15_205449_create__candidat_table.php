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
        Schema::create('_candidat', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateN');
            $table->string('lieuN');
            $table->string('nomT');
            $table->string('prenomT');
            $table->string('cinT');
            $table->float('moyenne');
            $table->string('numscrip');
            $table->string('adress');
            $table->string('institut');
            $table->string('nbrsoeurs');
            $table->string('nbrfreres');
            $table->string('raison');
            $table->string('sante');
            $table->string('maladie');
            $table->string('nivSc');
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
        Schema::dropIfExists('_candidat');
    }
};
