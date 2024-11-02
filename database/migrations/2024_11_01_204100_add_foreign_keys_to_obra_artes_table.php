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
        Schema::table('obra_artes', function (Blueprint $table) {
            $table->foreign(['estilo_artes_id'], 'fk_Obras_Estilos1')->references(['id'])->on('estilo_artes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('obra_artes', function (Blueprint $table) {
            $table->dropForeign('fk_Obras_Estilos1');
        });
    }
};
