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
        Schema::create('_demande', function (Blueprint $table) {
            $table->id();
            $table->string('nomT');
            $table->string('prenomT');
            $table->string('cinT');
            $table->date('dateCin');
            $table->string('adress');
            $table->string('role');
            $table->string('autreRole');
            $table->string('institut');
            $table->string('lieuE');
            $table->date('DatE');
            $table->string('raison');
            $table->string('nom');
            $table->string('prenom');
            $table->string('autreR');
            $table->string('MoyenneSc');
          
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
        Schema::dropIfExists('_demande');
    }
};
