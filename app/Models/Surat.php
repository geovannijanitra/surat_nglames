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
        'keperluan',
        'tanggalSurat',
        'umurPenduduk',
    ];
}
