<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gaji;

class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gaji::create([
        'guru_id' => 'GURU001',
        'gaji_pokok' => 5000000,
        'tunjangan' => 1000000,
        'potongan' => 500000,
        'gaji_bersih' => 5500000,
        'tanggal_transfer' => '2024-11-15'
    ]);

    Gaji::create([
        'guru_id' => 'GURU002',
        'gaji_pokok' => 4500000,
        'tunjangan' => 900000,
        'potongan' => 450000,
        'gaji_bersih' => 4950000,
        'tanggal_transfer' => '2024-11-15'
        ]);
    }
}
