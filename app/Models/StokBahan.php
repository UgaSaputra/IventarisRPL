<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_barang', 
        'satuan', 
        'stok_awal', 
        'tambahan_stok', 
        'jumlah_mutulasikeluar', 
        'sisa_stok', 
        'angka_diperoleh', 
        'tanggal_update', 
        'total'
    ];
}
