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
        //

        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion');
            $table->string('marca');
            $table->string('modelo');
            $table->decimal('precio', 8, 2);
            $table->date('fechaEntrada');
            $table->string('estatus');
            $table->string('articulo');
            $table->string('rutaImg');
            $table->enum('tipoAdq', ['donacion', 'compra', 'transferencia']);
            $table->integer('areaId')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
