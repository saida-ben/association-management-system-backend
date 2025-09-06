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
        Schema::create('_accident', function (Blueprint $table) {
            $table->id();
            $table->string('idBenef');
            $table->date('dateR');
            $table->string('accident');
            $table->string('score');
            $table->string('decisionA');
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
        Schema::dropIfExists('_accident');
    }
};
