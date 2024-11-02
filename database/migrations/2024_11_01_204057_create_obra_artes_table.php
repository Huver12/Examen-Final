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
        Schema::create('obra_artes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exposiciones');
            $table->string('titulo');
            $table->string('autor');
            $table->timestamps();
            $table->timestamp('delete_at')->nullable();
            $table->unsignedInteger('estilo_artes_id')->index('fk_obras_estilos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obra_artes');
    }
};
