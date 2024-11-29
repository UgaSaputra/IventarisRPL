<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjamanluarpraktikum extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_alat',
        'nama_peminjam',
        'spesifikasi',
        'no_iventaris',
        'nama_praktik',
        'tanggal_pinjam',
        'tanggal_kembali',
        'jumlah',
        'keadaan',
    ];
}
