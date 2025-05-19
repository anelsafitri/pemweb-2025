<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengguna extends Authenticatable
{
      protected $table = 'penggunas';
    protected $fillable = [
        'nama',
        'username',
        'password',
        'role',
        'created_at',
    ];

    /**
     * Relasi: jika role admin, pengguna memiliki banyak kunjungan yang dicatat.
     */
    public function kunjungans(): HasMany
    {
        return $this->hasMany(Kunjungan::class, 'admin_id');
    }

    /**
     * Relasi: jika role dokter, pengguna memiliki banyak riwayat medis yang ditulis.
     */
    public function riwayatMedis(): HasMany
    {
        return $this->hasMany(RiwayatMedis::class, 'dokter_id');
    }
}
