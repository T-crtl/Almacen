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
        Schema::create('trasladoArticulos', function (Blueprint $table) {
            $table->id();
            $table->integer('numInv'); // Relación para Equipos
            $table->integer('nominaAnterior'); // Relación para Personal
            $table->integer('nominaNuevo'); // Relación para Personal 2
            $table->integer('plantelID'); // Relación para Plantel
            $table->integer('firma');
            $table->string('observaciones');
            $table->date('fechaTraslado');
            $table->string('documento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trasladoArticulos');
    }
};
