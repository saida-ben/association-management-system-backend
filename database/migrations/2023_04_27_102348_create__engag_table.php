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
        Schema::create('_engag', function (Blueprint $table) {
            $table->id();
            $table->string('pT');
            $table->string('car');
            $table->string('cinT');
            $table->string('adress');
            $table->string('telT');
            $table->timestamps();
           
            $table->foreign('pT')->references('prenomT')->on('tuteur');
            $table->foreign('cinT')->references('cinT')->on('tuteur');
            $table->foreign('adress')->references('adress')->on('tuteur');
            $table->foreign('telT')->references('telT')->on('tuteur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_engag');
    }
};
