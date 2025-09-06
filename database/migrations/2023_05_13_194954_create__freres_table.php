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
        Schema::create('_freres', function (Blueprint $table) {
            $table->string('code');
            $table->string('nom');
            $table->string('prenom');
            
            $table->string('age');

            $table->string('profession');
            $table->string('sexe');
            $table->string('nivSc');
            $table->string('etatme');
            $table->string('vie');

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
        Schema::dropIfExists('_freres');
    }
};
