<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatMedis extends Model
{
     protected $table = 'riwayat_medis';
    protected $fillable = [
        'kunjungan_id',
        'diagnosa',
        'resep',
        'saran',
        'created_by',
    ];

    /**
     * Relasi ke model Kunjungan.
     */
    public function kunjungan(): BelongsTo
    {
        return $this->belongsTo(Kunjungan::class);
    }

    /**
     * Relasi ke model Pengguna (dokter yang membuat catatan medis).
     */
    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'created_by');
    }
}
