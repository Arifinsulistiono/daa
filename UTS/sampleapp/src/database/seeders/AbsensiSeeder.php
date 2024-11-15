<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Absensi;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Absensi::create([
            'id' => 'ABS001',
            'guru_id' => 'GURU001',
            'tanggal' => '2024-11-15',
            'hadir' => 1
        ]);
    
        Absensi::create([
            'id' => 'ABS002',
            'guru_id' => 'GURU002',
            'tanggal' => '2024-11-15',
            'hadir' => 1
        ]);
    }
}
