<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangan';

    // Definisikan kolom-kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'keterangan',
    ];

    // Relasi ke model Pegawai
    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_ruangan');
    }
}
