<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    protected $table = 'kematian';
    protected $primaryKey = 'idKematian';
    protected $fillable =
    [
            'tandatangan',
            'nik',
            'noSurat',
            'tanggalSurat',
            'jenisSurat',
            'tanggalKematian' ,
            'umurJenazah',
            'pukulKematian' ,
            'sebabKematian' ,
            'tempatKematian' ,
            'yangMenerangkan' ,

            'nikAyah' ,
            'namaAyah' ,
            'tanggalLahirAyah' ,
            'umurAyah',
            'pekerjaanAyah' ,
            'alamatAyah' ,

            'nikIbu' ,
            'namaIbu' ,
            'tanggalLahirIbu' ,
            'umurIbu',
            'pekerjaanIbu' ,
            'alamatIbu' ,


            'nikPelapor' ,
            'namaPelapor' ,
            'tanggalLahirPelapor' ,
            'umurPelapor',
            'pekerjaanPelapor' ,
            'alamatPelapor' ,

            'saksi1',
            'saksi2',
            'umurSaksi1',
            'umurSaksi2',



    ];
    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'nik');
    }
    public function tandatangan()
    {
        return $this->belongsTo(Perangkat::class, 'tandatangan' );
    }
    public function saksi1()
    {
        return $this->belongsTo(Perangkat::class, 'saksi1');
    }
    public function saksi2()
    {
        return $this->belongsTo(Perangkat::class, 'saksi2');
    }
 }
