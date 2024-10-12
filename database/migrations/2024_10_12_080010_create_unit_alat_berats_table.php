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
        Schema::create('unit_alat_berats', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_body')->unique();
            $table->foreignId('kategori_alat_berat_id');
            $table->foreignId('merek_alat_berat_id');
            $table->foreignId('tipe_alat_berat_id');
            $table->string('featured_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_alat_berats');
    }
};
