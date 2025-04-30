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
        Schema::create('turnos_mayors', function (Blueprint $table) {
            $table->id();
            $table->string('asignacion')->nullable();;
            $table->string('codigo_turno')->nullable();
            $table->string('turno');
            $table->decimal('precio',10,2);
            $table->decimal('disponibilidad',10,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turnos_mayors');
    }
};
