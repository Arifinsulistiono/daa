<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    use HasFactory;
    protected $table = 'gajis'; // Nama tabel disesuaikan
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'guru_id', 'gaji_pokok', 'tunjangan', 'potongan', 'gaji_bersih', 'tanggal_transfer'];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}
