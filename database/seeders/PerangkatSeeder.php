<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perangkat')->insert([
            'idPerangkat' => '1',
            'nama'=>'Tri Wahyuni',
            'tanggalLahir'=>'2012-12-12',
            'jabatan'=>'Pejabat Kelurahan',
            'detail'=>'Sekretaris Kelurahan',
            'alamat'=>'Jl Wagyono A5',

        ]);

        DB::table('perangkat')->insert([
                'idPerangkat' => '2',
                'nama' => 'Budi',
                'tanggalLahir' => '2012-12-12',
                'jabatan' => 'Ketua RT atau RW',
                'detail' => 'Ketua RT 3',
                'alamat' => 'Jl Wagyono A6',

        ]);

        DB::table('perangkat')->insert([
                'idPerangkat' => '3',
                'nama' => 'Adi',
                'tanggalLahir' => '2012-12-12',
                'jabatan' => 'Ketua RT atau RW',
                'detail' => 'Ketua RT 9',
                'alamat' => 'Jl Wagyono A3',

            ]
        );




}
}
