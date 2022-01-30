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
        'anakKe'=> '1',
        'kelamin'=> 'Laki-laki',
        'agama'=> 'Islam',
        'status'=> 'Kawin',
        'statushubungan'=> 'Kepala Keluarga',
        'pekerjaan'=> 'Karyawan Swasta',
        'kewarganegaraan'=> 'Warga Negara Asing',
        'pendidikan'=> 'SD',
        'namaAyah'=> 'Laksamana Maeda',
        'namaIbu'=> 'Soekarni',
        ]
    );



        DB::table('penduduk')->insert(
            [
                'nik' => '1234567890987653',
                'no_kk' => '9988776655443322',
                'nama' => 'Jesi',
                'tempatLahir' => 'Nagasaki',
                'tanggalLahir' => '1945-08-16',
                'anakKe' => '1',
                'kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'status' => 'Kawin',
                'statushubungan' => 'Istri',
                'pekerjaan' => 'Karyawan Swasta',
                'kewarganegaraan' => 'Warga Negara Asing',
                'pendidikan' => 'SD',
                'namaAyah' => 'Laksamana Maeda 3',
                'namaIbu' => 'Soekarneya',
            ],

        );



    }
}
