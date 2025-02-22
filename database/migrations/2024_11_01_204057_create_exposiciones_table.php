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
        Schema::create('exposiciones', function (Blueprint $table) {
            $table->increments('id')->unique('id_unique');
            $table->string('nombre');
            $table->string('ubicacion')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedInteger('obra_artes_id')->index('fk_exposiciones_obras_idx');

            $table->primary(['id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exposiciones');
    }
};
