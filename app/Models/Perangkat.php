<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perangkat extends Model
{
    protected $table = 'perangkat';
    protected $primaryKey = 'idPerangkat';
    protected $fillable =
    [
        'nama',
        'tanggalLahir',
        'jabatan',
        'detail',
        'alamat',
        // 'kelurahan',
        // 'kecamatan',
        // 'kota',
        // 'provinsi'
    ];
    public function surat()
    {
        return $this->hasMany(Surat::class, 'tandatangan');
    }
}

