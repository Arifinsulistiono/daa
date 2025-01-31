<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KaryaSeni extends Model
{
    use HasFactory;

    protected $table = 'karya_seni';
    protected $fillable = ['judul', 'tanggal_upload', 'id_pengguna', 'kategori', 'file_karya'];

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'id_karya');
    }
}
