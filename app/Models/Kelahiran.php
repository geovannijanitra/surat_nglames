<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    protected $table = 'kelahiran';
    protected $primaryKey = 'idKelahiran';
    protected $fillable =
    [
        'noSurat',
        'jenisSurat',
        'tanggalSurat',
        'namaAnak' ,
        'kelaminAnak',
        'tempatKelahiran' ,
        'tempatDilahirkan' ,
        'hariLahirAnak' ,
        'tanggalLahirAnak',
        'pukulKelahiran',
        'jenisKelahiran' ,
        'kelahiranKe',
        'penolongKelahiran' ,
        'beratBayi',
        'panjangBayi',

        'ayah' ,
        'ibu' ,
        'tanggalPerkawinan',

        'nikPelapor' ,
        'namaPelapor' ,
        'tanggalLahirPelapor' ,
        'umurPelapor' ,
        'pekerjaanPelapor' ,
        'alamatPelapor',

        'umurAyah',
        'umurIbu',
        'umurSaksi1',
        'umurSaksi2',

        'tandatangan' ,
        'saksi1' ,
        'saksi2',
    ];

    public function detailAyah(){
        return $this->belongsTo(Penduduk::class,'ayah');
    }

    public function detailIbu()
    {
        return $this->belongsTo(Penduduk::class, 'ibu');
    }
}
