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
        Schema::create('tuteur', function (Blueprint $table) {
            $table->id();
            $table->string('cinT');
            $table->string('nomT');
            $table->string('prenomT');
            $table->string('adress');
            $table->string('professionT');
            $table->string('telT');
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
        Schema::dropIfExists('tuteur');
    }
};
