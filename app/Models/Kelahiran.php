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
         'namaAnak',
         'kelaminAnak',
         'tempatDilahirkan',
         'tempatKelahiran',
         'hariLahirAnak',
         'tanggalLahir',
         'pukulKelahiran',
         'jenisKelahiran',
         'kelahiranKe',
         'penolongKelahiran',
         'beratBayi',
         'panjangBayi',

        'ayah',
        'ibu',

        'nikPelapor',
        'namaPelapor',
        'tanggalLahirPelapor',
        'umurPelapor',
        'pekerjaanPelapor',
        'alamatPelapor',

        'saksi1',
        'saksi2',
    ];
}
