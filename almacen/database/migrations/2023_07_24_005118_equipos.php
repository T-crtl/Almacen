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
            $table->text('descripcion')->nullable();
            $table->integer('cuenta')->nullable();
            $table->integer('numInv')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('serie')->nullable();
            $table->string('num_ref')->nullable();
            $table->string('factura')->nullable();
            $table->string('proveedor')->nullable();
            $table->string('pedido')->nullable();
            $table->string('contrato')->nullable();
            $table->string('estado')->nullable(); 
            $table->string('resguardo')->nullable(); 
            $table->string('resguardo2')->nullable(); 
            $table->string('observaciones')->nullable(); 
            $table->decimal('precio', 8, 2)->nullable(); //Importe
            $table->date('fechaEntrada')->nullable(); //Fecha
            $table->date('fechaBaja')->nullable(); //Fecha Baja
            $table->integer('nomina')->nullable();
            $table->integer('nomina2')->nullable();
            $table->string('estatus')->nullable();
            $table->string('articulo')->nullable();
            $table->string('rutaImg')->nullable();
            $table->enum('tipoAdq', ['donacion', 'compra', 'transferencia'])->nullable(); // Tipo
            $table->integer('areaId')->unsigned()->nullable();
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
