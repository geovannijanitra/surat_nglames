<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KK extends Model
{

    protected $table = 'kk';
    protected $primaryKey = 'noKk';
    protected $fillable = ['noKk', 'alamat', 'RT','RW'];
    public function penduduk()
    {
        return $this->hasMany(Penduduk::class, 'no_kk');
    }
}
