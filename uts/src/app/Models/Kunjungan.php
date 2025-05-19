<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kunjungan extends Model
{
    protected $table = 'kunjungans';
    protected $fillable = [
        'pasien_id',
        'tanggal',
        'keluhan',
        'tindakan',
        'created_by',
    ];

    /**
     * Relasi ke model Pasien (kunjungan dimiliki oleh satu pasien).
     */
    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class);
    }

    /**
     * Relasi ke model Pengguna (admin yang membuat kunjungan).
     */
    public function admin(): BelongsTo
    {
        return $this->belongsTo(Pengguna::class, 'created_by');
    }

    /**
     * Relasi ke model RiwayatMedis (setiap kunjungan memiliki satu riwayat medis).
     */
    public function riwayatMedis(): HasOne
    {
        return $this->hasOne(RiwayatMedis::class);
    }
}
