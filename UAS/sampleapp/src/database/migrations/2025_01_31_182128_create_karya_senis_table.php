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
        Schema::create('karya_seni', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->date('tanggal_upload');
            $table->foreignId('id_pengguna')->constrained('users')->onDelete('cascade');
            $table->string('kategori');
            $table->string('file_karya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karya_senis');
    }
};
