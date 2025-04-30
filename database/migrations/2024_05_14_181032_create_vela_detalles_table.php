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
        Schema::create('vela_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignID("turno_id")->references("id")->on("turnos_velas");
            $table->string("codigo_cargador");
            $table->string("DPI")->nullable();
            $table->string("Nombres");
            $table->string("Apellidos");
            $table->enum("Forma_pago", ["Efectivo","Transferencia"]);
            $table->decimal("Valor",10,2);
            $table->decimal("Numero_autorizacion",12,0)->nullable();;
            $table->foreignId("user_id")->references("id")->on("users");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vela_detalles');
    }
};
