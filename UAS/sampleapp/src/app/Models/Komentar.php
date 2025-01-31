<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';
    protected $fillable = ['id_karya', 'id_pengguna', 'isi_komentar', 'tanggal_komentar'];

    public function karyaSeni()
    {
        return $this->belongsTo(KaryaSeni::class, 'id_karya');
    }

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
