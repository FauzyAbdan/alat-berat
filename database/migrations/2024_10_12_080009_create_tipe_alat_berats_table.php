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
        Schema::create('tipe_alat_berats', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('kategori_alat_berat_id');
            $table->foreignId('merek_alat_berat_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipe_alat_berats');
    }
};
