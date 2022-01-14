<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'no_kk',
        'nama',
        'tempatLahir',
        'tanggalLahir',
        'kelamin',
        'agama',
        'status',
        'statushubungan',
        'pekerjaan',
        'kewarganegaraan',
        'pendidikan',
        'namaAyah',
        'namaIbu'
    ];
    public function kk()
    {
        return $this->belongsTo(KK::class, 'no_kk');
    }
}
