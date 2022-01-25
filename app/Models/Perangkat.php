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
        'nikPerangkat',
        'nama',
        'tanggalLahir',
        'jabatan',
        'detail',
        'alamat',
    ];
    public function surat()
    {
        return $this->hasMany(Surat::class, 'tandatangan');
    }
}

