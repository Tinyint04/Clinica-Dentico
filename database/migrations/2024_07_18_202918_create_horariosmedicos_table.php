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
        Schema::create('horariosmedicos', function (Blueprint $table) {
            $table->idHorariosMedicos();
            $table->integer('idSucursalMedico');
            $table->string('dia', 10);
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horariosmedicos');
    }
};
