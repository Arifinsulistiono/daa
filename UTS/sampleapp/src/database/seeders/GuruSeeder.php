<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guru::create([
            'id' => 'GURU001',
            'nama' => 'Ahmad Fauzi',
            'nip' => '197301011999031001',
            'email' => 'ahmad.fauzi@example.com',
            'telepon' => '08123456789',
            'tanggal_lahir' => '1973-01-01',
            'alamat' => 'Jl. Mawar No. 10',
            'pendidikan_terakhir' => 'S2',
            'sertifikasi' => 'Pendidikan Profesional'
        ]);
    
        Guru::create([
            'id' => 'GURU002',
            'nama' => 'Siti Rahmawati',
            'nip' => '198502121990122002',
            'email' => 'siti.rahmawati@example.com',
            'telepon' => '08234567890',
            'tanggal_lahir' => '1985-02-12',
            'alamat' => 'Jl. Anggrek No. 5',
            'pendidikan_terakhir' => 'S1',
            'sertifikasi' => 'Pendidikan Dasar'
        ]);
    }
}
