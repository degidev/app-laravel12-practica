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
        Schema::create('asis_prueba', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100); // varchar con máximo 100 caracteres
            $table->integer('edad'); // int
            $table->date('fecha_nacimiento'); // fecha
            $table->time('hora_inicio'); // hora
            $table->string('email')->nullable()->unique(); // varchar que puede ser nulo (único)
            $table->string('direccion')->required(); // varchar requerido
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asis_prueba');
    }
};
