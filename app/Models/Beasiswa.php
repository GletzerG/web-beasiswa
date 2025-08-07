<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswas'; // Atau 'beasiswa' sesuai nama tabel Anda

    protected $fillable = [
        'nama',
        'deskripsi',
        'persyaratan',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'jenis',
        'nominal'
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'nominal' => 'decimal:2'
    ];

    /**
     * Relasi ke model Pendaftar
     */
    public function pendaftars()
    {
        return $this->hasMany(Pendaftar::class, 'beasiswa_id');
    }

    /**
     * Scope untuk beasiswa yang masih aktif
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'aktif')
                    ->where('tanggal_selesai', '>=', now());
    }

    /**
     * Accessor untuk format tanggal Indonesia
     */
    public function getTanggalMulaiFormatAttribute()
    {
        return $this->tanggal_mulai ? $this->tanggal_mulai->format('d/m/Y') : null;
    }

    public function getTanggalSelesaiFormatAttribute()
    {
        return $this->tanggal_selesai ? $this->tanggal_selesai->format('d/m/Y') : null;
    }
}