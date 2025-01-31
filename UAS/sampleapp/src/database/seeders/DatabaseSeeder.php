<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KaryaSeni;
use App\Models\Komentar;
use App\Models\Inspirasi;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // Password diset menjadi "password"
        ]);

        $user->assignRole('super_admin');

        // Tambahkan beberapa user tambahan
        $user2 = User::factory()->create([
            'name' => 'User Kreatif',
            'email' => 'user@kreatif.com',
            'password' => Hash::make('password'),
        ]);

        $user3 = User::factory()->create([
            'name' => 'Seniman Digital',
            'email' => 'seniman@digital.com',
            'password' => Hash::make('password'),
        ]);

        // Buat beberapa contoh karya seni
        $karya1 = KaryaSeni::create([
            'judul' => 'Lukisan Matahari Terbenam',
            'tanggal_upload' => now(),
            'id_pengguna' => $user->id, // Admin yang upload
            'kategori' => 'digital',
            'file_karya' => 'uploads/matahari.jpg',
        ]);

        $karya2 = KaryaSeni::create([
            'judul' => 'Potret Kota Modern',
            'tanggal_upload' => now(),
            'id_pengguna' => $user2->id, // User Kreatif yang upload
            'kategori' => 'fotografi',
            'file_karya' => 'uploads/kota.jpg',
        ]);

        // Buat komentar untuk karya seni
        Komentar::create([
            'id_karya' => $karya1->id,
            'id_pengguna' => $user3->id, // Seniman Digital yang berkomentar
            'isi_komentar' => 'Sangat indah! Warna-warnanya sangat hidup.',
            'tanggal_komentar' => now(),
        ]);

        Komentar::create([
            'id_karya' => $karya2->id,
            'id_pengguna' => $user->id, // Admin yang berkomentar
            'isi_komentar' => 'Komposisi yang luar biasa!',
            'tanggal_komentar' => now(),
        ]);

        // Tambahkan inspirasi harian
        Inspirasi::create([
            'isi_inspirasi' => 'Seni adalah cerminan jiwa manusia. Teruslah berkarya!',
            'tanggal' => now(),
        ]);

        Inspirasi::create([
            'isi_inspirasi' => 'Setiap garis yang kau buat adalah ekspresi unik dari dirimu.',
            'tanggal' => now(),
        ]);
    }
}
