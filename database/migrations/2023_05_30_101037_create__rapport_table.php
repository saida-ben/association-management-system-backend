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
        Schema::create('_rapport', function (Blueprint $table) {
            $table->string('numR');

            $table->string('nomR');

            $table->string('causeV');
            $table->date('date');
            $table->time('Heure');

            $table->string('accompagnant');
            $table->string('sujetV');
            $table->string('remarque');
            $table->string('membreV');
            $table->string('descrEtatphysique');
            $table->string('descrEtatpsychique');


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
        Schema::dropIfExists('_rapport');
    }
};
