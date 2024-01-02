<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->unsignedBigInteger('proprietaire_id');
            $table->unsignedBigInteger('immeuble_id');
            $table->unsignedBigInteger('type_appartement_id');
            $table->integer('nombre_locataires_max');
            $table->timestamps();

            // Clés étrangères
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires');
            $table->foreign('immeuble_id')->references('id')->on('immeubles');
            $table->foreign('type_appartement_id')->references('id')->on('types_appartements');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appartements');
    }
};
