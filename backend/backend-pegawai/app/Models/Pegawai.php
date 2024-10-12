<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Definisikan kolom-kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'nama',
        'alamat',
        'tgl_lahir',
        'id_ruangan',
    ];

    // Relasi ke model Ruangan
    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class, 'id_ruangan');
    }
}
