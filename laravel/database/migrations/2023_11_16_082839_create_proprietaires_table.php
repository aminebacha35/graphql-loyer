<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personne_id');
            $table->string('numero_compte')->unique();
            $table->boolean('assujetti_tva')->default(false);
            $table->timestamps();

            // Clé étrangère
            $table->foreign('personne_id')->references('id')->on('personnes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('proprietaires');
    }
};
