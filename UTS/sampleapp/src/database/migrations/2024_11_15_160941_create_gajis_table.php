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
        Schema::create('gajis', function (Blueprint $table) {
            $table->id();  // ID auto increment
            $table->string('guru_id');  // Pastikan guru_id bertipe string
            $table->foreign('guru_id')->references('id')->on('gurus')->onDelete('cascade');
            $table->decimal('gaji_pokok', 15, 2);
            $table->decimal('tunjangan', 15, 2);
            $table->decimal('potongan', 15, 2);
            $table->decimal('gaji_bersih', 15, 2);
            $table->date('tanggal_transfer');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gajis');
    }
};
