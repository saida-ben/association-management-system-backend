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
        Schema::create('_apt_phys', function (Blueprint $table) {
            $table->id();
            $table->string('nomB');
            $table->string('prenomB');
            $table->string('nomD');
            $table->string('prenomD');
            $table->string('nivSc');
            $table->string('univ');
            $table->date('d');
            $table->string('etabliss');
            $table->string('apte');
            $table->timestamps();
            
            $table->foreign('nomB')->references('nom')->on('child');
            $table->foreign('prenomB')->references('prenom')->on('child');
            $table->foreign('etabliss')->references('etabliss')->on('_parcours_scolaire');
            $table->foreign('nivSc')->references('nivSc')->on('_parcours_scolaire');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_apt_phys');
    }
};
