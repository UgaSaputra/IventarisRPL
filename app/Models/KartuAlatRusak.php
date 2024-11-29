<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuAlatRusak extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_alat',
        'tanggal',
        'no_iventaris',
        'kerusakan',
        'keterangan',
    ];
}
