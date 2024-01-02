<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('immeubles', function (Blueprint $table) {
            $table->id();
            $table->integer('numero'); // Numéro de l'immeuble
            $table->string('adresse'); // Adresse de l'immeuble
            $table->unsignedBigInteger('syndic_id');
            $table->timestamps();

            // Clés étrangères
            $table->foreign('syndic_id')->references('id')->on('syndics');
        });
    }

    public function down()
    {
        Schema::dropIfExists('immeubles');
    }
};
