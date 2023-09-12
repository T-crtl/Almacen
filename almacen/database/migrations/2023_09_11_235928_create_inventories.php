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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('inventario');
            $table->string('descripcion');
            $table->string('area_asignada');
            $table->date('fecha_reporte');
            $table->decimal('valor', 5,3);
            $table->string('plantel');
            $table->string('estatus');
            $table->integer('total_bienes');
            $table->decimal('monto_bienes', 5, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
