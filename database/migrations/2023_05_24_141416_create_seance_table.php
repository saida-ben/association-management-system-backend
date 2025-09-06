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
        Schema::create('seance', function (Blueprint $table) {
            $table->id();
            $table->string('idBenef');
            $table->date('dateR');
            $table->string('seance');
            $table->string('tempsS');
            $table->string('prof');
            $table->string('presence');

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
        Schema::dropIfExists('seance');
    }
};
