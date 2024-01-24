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
            $table->bigInteger('nomina')->unsigned();
            $table->foreign('nomina')
                ->references('id')
                ->on('peopledatabases')
                ->onDelete("cascade");
            $table->bigInteger('resguardatario')->unsigned();
            $table->foreign('resguardatario')
                ->references('id')
                ->on('peopledatabases')
                ->onDelete("cascade");
            $table->date('fecha');
            $table->bigInteger('area')->unsigned();
            $table->foreign('area')
                ->references('id')
                ->on('areas')
                ->onDelete("cascade");
            $table->string('observaciones');
            $table->string('documento');
            $table->bigInteger('numInv')->unsigned();
            $table->foreign('numInv')
                ->references('id')
                ->on('equipos')
                ->onDelete("cascade");
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
