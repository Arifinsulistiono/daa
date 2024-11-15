<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus'; // Nama tabel disesuaikan
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'nip', 'email', 'telepon', 'tanggal_lahir', 'alamat', 'pendidikan_terakhir', 'sertifikasi'];

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'guru_id');
    }

    public function gaji()
    {
        return $this->hasMany(Gaji::class, 'guru_id');
    }
}
