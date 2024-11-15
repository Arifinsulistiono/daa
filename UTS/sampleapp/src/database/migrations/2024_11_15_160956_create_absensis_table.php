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
        Schema::create('absensis', function (Blueprint $table) {
            $table->string('id')->primary();  // Gunakan string untuk ID
            $table->string('guru_id');        // Guru ID juga harus bertipe string
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('cascade');
            $table->date('tanggal');
            $table->boolean('hadir')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};