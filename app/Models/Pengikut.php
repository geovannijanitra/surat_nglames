<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengikut extends Model
{
    protected $table = 'pengikut';
    protected $primaryKey = 'idPengikut';
    protected $fillable = [
        'surat_id',
        'nomer',
        'nama',
        'kelamin',
        'umurpengikut',
        'status',
        'pendidikan',
        'nikpengikut',
        'ket'
    ];

    public function surat()
    {
        return $this->belongsTo( Surat::class, 'surat_id');
    }

}
