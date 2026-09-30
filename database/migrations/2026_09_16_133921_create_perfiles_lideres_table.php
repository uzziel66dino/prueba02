
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
        Schema::create('perfiles_lideres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lider_id')
                  ->unique()
                  ->constrained('lideres')
                  ->cascadeOnDelete();
            $table->string('biografia');
            $table->string('telefono');
            $table->string('perfil_github');
            $table->integer('anos_experiencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfiles_lideres');
    }
};