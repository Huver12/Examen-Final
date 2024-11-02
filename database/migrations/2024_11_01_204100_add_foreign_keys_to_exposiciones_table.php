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
        Schema::table('exposiciones', function (Blueprint $table) {
            $table->foreign(['obra_artes_id'], 'fk_Exposiciones_Obras')->references(['id'])->on('obra_artes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exposiciones', function (Blueprint $table) {
            $table->dropForeign('fk_Exposiciones_Obras');
        });
    }
};
