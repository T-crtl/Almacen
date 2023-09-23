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
        Schema::create('personales', function (Blueprint $table) {
            $table->id();
            $table->integer('nomina');
            $table->string('nombre', 100);
            $table->string('adscripcion');
            $table->string('tipo_contrato');
            $table->integer('plantelId');
            $table->string('funcion');
            $table->string('password');
            $table->string('correo');
            $table->string('rutaImg')->nullable();
            $table->string('estatus');
            $table->string('nivel_educativo', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personales');
    }
};
