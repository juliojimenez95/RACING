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
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_apuesta', 8, 2);
            $table->decimal('valor_ganacia', 8, 2);
            $table->unsignedBigInteger('users');
            $table->unsignedBigInteger('piloto_carrera');
            $table->timestamps();


            $table->foreign('piloto_carrera')->references('id')->on('pilotos_carrera');
            $table->foreign('users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apuestas');
    }
};
