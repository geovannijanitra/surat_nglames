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
    }
}
