<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanPraktikum extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_alat',
        'nama_peminjam',
        'spesifikasi',
        'no_iventaris',
        'nama_laboran',
        'nama_praktikum',
        'tanggal_pinjam',
        'tanggal_kembali',
        'jumlah',
        'keadaan'
    ];
}
