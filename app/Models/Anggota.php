<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas'; // Nama tabel di database

    protected $primaryKey = 'id_anggota'; // Primary key tabel

    protected $fillable = [
        'nama_anggota', 
        'no_anggota', 
        'alamat', 
    ];

    /**
     * Hubungan dengan tabel peminjaman
     */
    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class, 'id_anggota');
    }
}
