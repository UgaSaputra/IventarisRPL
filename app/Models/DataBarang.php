<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;
    protected $table = 'data_barangs';
    protected $fillable = [
        'nama_barang',
        'spesifikasi',
        'sumber_pengadaan',
        'jumlah',
        'kondisi',
    ];
}
