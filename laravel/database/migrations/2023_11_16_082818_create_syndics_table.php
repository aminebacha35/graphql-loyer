<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('syndics', function (Blueprint $table) {
            $table->id();
            $table->string('nom');  // nom du syndic
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('syndics');
    }
};
