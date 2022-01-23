<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penduduk')->insert([
        'nik'=> '1234567890987654',
        'no_kk'=> '9988776655443322',
        'nama'=> 'Johan',
        'tempatLahir'=> 'Nagasaki',
        'tanggalLahir'=> '1945-08-16',
        'kelamin'=> 'Laki-laki',
        'agama'=> 'Atheis',
        'status'=> 'Kawin',
        'statushubungan'=> 'Kepala Keluarga',
        'pekerjaan'=> 'NAZI',
        'kewarganegaraan'=> 'Warga Negara Asing',
        'pendidikan'=> 'SD',
        'namaAyah'=> 'Laksamana Maeda',
        'namaIbu'=> 'Soekarni',
        ]);
    }
}
