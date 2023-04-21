<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pilotos_carrera', function (Blueprint $table) {
            $table->id();
            $table->integer('posicion');
            $table->unsignedBigInteger('piloto');
            $table->unsignedBigInteger('carrera');
            $table->unsignedBigInteger('moto');
            $table->timestamps();

            $table->foreign('carrera')->references('id')->on('carreras');
            $table->foreign('piloto')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilotos_carrera');
    }
};
