<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pasien extends Model
{
      protected $table = 'pasiens';
    protected $fillable = [
        'nama',
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp',
    ];

    /**
     * Relasi: Pasien memiliki banyak kunjungan.
     */
    public function kunjungans(): HasMany
    {
        return $this->hasMany(Kunjungan::class);
    }
}
