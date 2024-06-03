<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    // protected $table = 'peminjamans';
    protected $table = 'peminjamans';

    protected $primaryKey = 'id_peminjaman';

    protected $fillable = [
        'id_anggota',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status_peminjaman'
    ];

    public function detail()
    {
        return $this->hasMany(Detail::class, 'id_inventaris', 'id_inventaris');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }
}
