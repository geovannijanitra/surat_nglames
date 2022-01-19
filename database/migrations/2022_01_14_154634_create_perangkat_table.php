<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerangkatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perangkat', function (Blueprint $table) {
            $table->bigInteger('idPerangkat')->unique()->unsigned()->autoIncrement();
            $table->string('nama');
            $table->date('tanggalLahir');
            // $table->string('pekerjaan');
            $table->string('jabatan');
            $table->string('detail');
            $table->string('alamat');
            // $table->string('kelurahan');
            // $table->string('kecamatan');
            // $table->string('kota');
            // $table->string('provinsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perangkat');
    }
}
