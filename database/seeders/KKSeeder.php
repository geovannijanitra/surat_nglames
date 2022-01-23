<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class KKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kk')->insert(
    [
            'noKk'=>'9988776655443322',
            'alamat'=>'Jl Suki Kuah',
            'RT'=>'13',
            'RW'=>'3'
            ]);
    }
}
