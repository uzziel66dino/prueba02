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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')
                  ->constrained('proyectos')
                  ->cascadeOnDelete();
            $table->foreignId('desarrollador_id')
                  ->constrained('desarrolladores')
                  ->cascadeOnDelete();
            $table->date('fecha_asignacion');
            $table->decimal('puntuacion_rendimiento');
            $table->enum('estado', ['activo', 'aprobado', 'reprobado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};