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
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('descripcion', 30);
            $table->string('tipo',30);
            $table->string('division',30);
            $table->integer('plantelID')->unsigned()->nullable(); //tabla plantel
            $table->integer('edificioID')->unsigned()->nullable(); //tabla edificio
            $table->integer('nivel')->nullable(); // tabla edificio
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
