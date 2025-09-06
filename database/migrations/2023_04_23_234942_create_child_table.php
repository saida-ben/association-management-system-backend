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
        Schema::create('child', function (Blueprint $table) {
            $table->id();    
            $table->string('nom');
            $table->string('prenom');
            $table->string('age');
            $table->date('dateN');
            $table->string('lieuN');
            $table->string('niv');
            $table->string('etatS');
            $table->string('nomP');
            $table->string('prenomP');
            $table->string('vP');
            $table->string('professionP');
            $table->string('telP');
            $table->string('nomM');
            $table->string('prenomM');
            $table->string('vM');
            $table->string('professionM');
            $table->string('telM');
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
        Schema::dropIfExists('child');
    }
};
