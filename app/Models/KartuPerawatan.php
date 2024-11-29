<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuPerawatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'alat_diperbaiki',
        'Spesifikasi',
        'keterangan',
    ];
}
