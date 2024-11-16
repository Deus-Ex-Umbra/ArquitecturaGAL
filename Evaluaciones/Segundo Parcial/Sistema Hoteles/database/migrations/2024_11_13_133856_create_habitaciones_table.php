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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_habitacion');
            $table->decimal('precio_por_noche', 10, 2);
            $table->enum('estado', ['disponible', 'ocupado', 'mantenimiento']);
            $table->string('descripcion', 256);
            $table->foreignId('id_tipo_habitacion')->constrained('tipo_habitaciones')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};
