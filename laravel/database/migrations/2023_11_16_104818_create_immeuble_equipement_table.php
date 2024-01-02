<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('immeuble_equipement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('immeuble_id');
            $table->unsignedBigInteger('equipement_id');
            $table->timestamps();

            // Clés étrangères
            $table->foreign('immeuble_id')->references('id')->on('immeubles');
            $table->foreign('equipement_id')->references('id')->on('equipements');
        });
    }

    public function down()
    {
        Schema::dropIfExists('immeuble_equipement');
    }
};
