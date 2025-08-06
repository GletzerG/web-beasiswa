<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = [
        'nama_beasiswa',  // Tambahkan ini
        'deskripsi',
        'jumlah_dana',
        'tanggal_buka',
        'tanggal_tutup',
        'status',
        'persyaratan'
        // field lainnya yang sudah ada...
    ];
}