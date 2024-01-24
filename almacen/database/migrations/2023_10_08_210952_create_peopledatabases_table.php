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
        Schema::create('peopledatabases', function (Blueprint $table) {
                $table->id();
                $table->integer('nomina');
                $table->string('nombre', 100);
                $table->string('adscripcion');
                $table->string('tipo_contrato');
                $table->integer('plantelID')->unsigned(); // Campo Relacional
                $table->string('funcion');
                $table->string('password');
                $table->string('correo')->unique();
                $table->string('foto');
                $table->string('estatus');
                $table->string('nivel_educativo', 25);
                $table->foreign('PlantelID')
                    ->references('id')
                    ->on('campuses') //Llave foranea
                    ->onDelete("cascade"); 
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peopledatabases');
    }
};
