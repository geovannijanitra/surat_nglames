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
            'pukulKematian' ,
            'sebabKematian' ,
            'tempatKematian' ,
            'yangMenerangkan' ,

            'nikAyah' ,
            'namaAyah' ,
            'tanggalLahirAyah' ,
            'pekerjaanAyah' ,
            'alamatAyah' ,

            'nikIbu' ,
            'namaIbu' ,
            'tanggalLahirIbu' ,
            'pekerjaanIbu' ,
            'alamatIbu' ,


            'nikPelapor' ,
            'namaPelapor' ,
            'tanggalLahirPelapor' ,
            'pekerjaanPelapor' ,
            'alamatPelapor' ,

             'saksi1',
             'saksi2',


    ];
    public function nik()
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
