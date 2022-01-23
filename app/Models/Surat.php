<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'idSurat';
    protected $fillable = [
        'nik',
        'noSurat',
        'jenisSurat',
        'umurPenduduk',
        'tanggalSurat',
        'keperluan',
        'tandatangan',
        'usaha',
        'namaAnak',
        'sekolah',
        'desaKe',
        'kecamatanKe',
        'kotaKe',
        'alasan',
        'tanggalPindah',
        'propinsiKe',
    ];

    public function pengikut()
    {
        return $this->hasMany(Pengikut::class, 'surat_id');
    }


    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'nik');
    }

    public function perangkat()
    {
        return $this->belongsTo(Perangkat::class, 'tandatangan');
    }
}
