<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('locataires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personne_id');
            $table->unsignedBigInteger('appartement_id');
            $table->boolean('is_locataire_principal')->default(false);
            $table->timestamps();

            // Clés étrangères
            $table->foreign('personne_id')->references('id')->on('personnes');
            $table->foreign('appartement_id')->references('id')->on('appartements');
        });
    }

    public function down()
    {
        Schema::dropIfExists('locataires');
    }
};
