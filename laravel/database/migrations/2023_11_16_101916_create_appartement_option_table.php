<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('appartement_option', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appartement_id');
            $table->unsignedBigInteger('option_id');
            $table->timestamps();

            // Clés étrangères
            $table->foreign('appartement_id')->references('id')->on('appartements');
            $table->foreign('option_id')->references('id')->on('options');
        });
    }

    public function down()
    {
        Schema::dropIfExists('appartement_option');
    }
};
