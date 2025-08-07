<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftars'; // Pastikan nama tabel sesuai

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'semester',
        'ipk',
        'beasiswa_id', // Foreign key ke tabel beasiswa
        'status',
        'file_transkrip',
        'file_ktp',
        'file_kk'
    ];

    protected $casts = [
        'ipk' => 'decimal:2'
    ];

    /**
     * Relasi ke model Beasiswa
     * Error "Array to string conversion" biasanya terjadi karena relasi ini tidak ada
     */
    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class, 'beasiswa_id');
    }

    /**
     * Scope untuk filter berdasarkan status
     */
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    /**
     * Accessor untuk status dalam bahasa Indonesia
     */
    public function getStatusLabelAttribute()
    {
        $statuses = [
            'pending' => 'Menunggu',
            'diterima' => 'Diterima',
            'ditolak' => 'Ditolak'
        ];

        return $statuses[$this->status] ?? $this->status;
    }
}