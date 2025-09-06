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
        Schema::create('_exon_fr', function (Blueprint $table) {
            $table->id();
            $table->string('num');
            $table->date('datEx');
            $table->string('nT');
            $table->string('pT');
            $table->string('cinT');
            $table->date('dateCin');
            $table->string('nomB');
            $table->string('prenomB');
            $table->string('raison');
            $table->timestamps();

            $table->foreign('nomB')->references('nom')->on('child');
            $table->foreign('prenomB')->references('prenom')->on('child');
            $table->foreign('nT')->references('nomT')->on('tuteur');
            $table->foreign('pT')->references('prenomT')->on('tuteur');
            $table->foreign('cinT')->references('cinT')->on('tuteur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_exon_fr');
    }
};
