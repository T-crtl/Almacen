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
            $table->integer('numInv');
            $table->string('descripcion', 150);
            $table->string('marca', 50);
            $table->string('modelo', 30);
            $table->string('serie', 20);
            $table->decimal('precio', 8, 2)->nullable(); //Importe  
            $table->date('fechaEntrada')->nullable(); //Fecha
            $table->string('estatus', 20);
            $table->string('articulo', 50);
            $table->string('rutaImg')->nullable();

            $table->integer('tipoAdq')->unsigned(); // Campo Relacional
            $table->foreign('tipoAdq')
                ->references('id')
                ->on('tipoAdquisicion') //Llave foranea
                ->onDelete("cascade"); 
            //$table->enum('tipoAdq', ['donacion', 'compra', 'transferencia'])->nullable(); // Tipo

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
