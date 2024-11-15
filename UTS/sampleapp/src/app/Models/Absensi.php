<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensis'; // Nama tabel disesuaikan
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'guru_id', 'tanggal', 'hadir'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
