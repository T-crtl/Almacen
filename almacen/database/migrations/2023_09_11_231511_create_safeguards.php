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
        Schema::create('safeguards', function (Blueprint $table) {
            $table->id();
            $table->string('cuenta_contable');
            $table->string('descripcion');
            $table->integer('precio_inicial');
            $table->string('ejercicio');
            $table->decimal('porcentaje_depresiacion', 5, 2);
            $table->decimal('valor_historico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safeguards');
    }
};
