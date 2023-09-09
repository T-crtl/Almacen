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
            $table->integer('cuenta');
            $table->integer('numInv');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('num_ref');
            $table->string('factura');
            $table->string('proveedor');
            $table->string('pedido');
            $table->string('contrato');
            $table->string('estado'); 
            $table->string('resguardo'); 
            $table->string('resguardo2'); 
            $table->string('observaciones'); 
            $table->decimal('precio', 8, 2); //Importe
            $table->date('fechaEntrada'); //Fecha
            $table->date('fechaBaja'); //Fecha Baja
            $table->integer('nomina');
            $table->integer('nomina2');
            $table->string('estatus');
            $table->string('articulo');
            $table->string('rutaImg');
            $table->enum('tipoAdq', ['donacion', 'compra', 'transferencia']); // Tipo
            $table->integer('areaId')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
