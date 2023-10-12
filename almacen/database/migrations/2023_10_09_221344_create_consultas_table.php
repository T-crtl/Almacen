<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            //$table->integer('registro')->unique();
            $table->integer('resguardatario');
            $table->date('fecha');
            $table->integer('area');
            $table->string('observaciones');
            $table->string('documento');
            $table->integer('numInv');
           // $table->integer('articulo');
            //$table->integer('descripcion');
            //$table->integer('marca');
            //$table->integer('modelo');
            //$table->integer('serie');
           // $table->integer('fechaEntrada');
            //$table->integer('total');
            //$table->integer('monto');
            $table->integer('firma');
            $table->integer('inventarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
