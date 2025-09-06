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
        Schema::create('_dossier_medical', function (Blueprint $table) {
            $table->id();
            $table->string('nomB');
            $table->string('prenomB');
            $table->date('dateN');
            $table->string('dA');
            $table->float('poids');
            $table->string('sang');
            $table->string('diabete');
            $table->string('asthme');
            $table->string('allergie');
            $table->string('Neuropathie');
            $table->string('hemophilie');
            $table->string('Hypertension');
            $table->string('myopathie');
            $table->string('tuberculose');
            $table->string('autr');
            $table->string('dent');
            $table->string('ventre');
            $table->string('pr');
            $table->string('coeur');
            $table->string('souf');
            $table->boolean('son');
            $table->boolean('sonsouf');
            $table->boolean('rad');
            $table->boolean('cliquetis');
            $table->boolean('muscl');
            $table->boolean('refl');
            $table->boolean('sm');
            $table->boolean('aud');
            $table->boolean('brul');
            $table->string('testur');
            $table->boolean('peau');
            $table->boolean('tet');
            $table->boolean('muqueuses');
            $table->boolean('gale');
            $table->boolean('sousgueule');
            $table->boolean('clavicule');
            $table->boolean('Bequilles');
            $table->boolean('cuisse');
            $table->boolean('VDRL');
            $table->boolean('Glycemie');
            $table->boolean('Hepatite');
            $table->boolean('NFS');
            $table->boolean('HIV');
            $table->boolean('BCG');
            $table->boolean('tetanos');
            $table->boolean('Vaccin');
            $table->timestamps();
            $table->foreign('nomB')->references('nom')->on('child');
            $table->foreign('prenomB')->references('prenom')->on('child');
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
        Schema::dropIfExists('_dossier_medical');
    }
};
