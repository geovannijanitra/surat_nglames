<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->bigInteger('idKematian')->unique()->unsigned();
            $table->bigInteger('tandatangan')->unsigned()->nullable();
            $table->foreign('tandatangan')->references('idPerangkat')->on('perangkat')->onUpdate('cascade');
            $table->bigInteger('nik')->unsigned();
            $table->foreign('nik')->references('nik')->on('penduduk')->onUpdate('cascade');

            $table->string('tanggalSurat');
            $table->string('noSurat');
            $table->string('jenisSurat');

            $table->string('tanggalKematian');
            $table->string('pukulKematian');
            $table->string('sebabKematian');
            $table->string('tempatKematian');
            $table->string('yangMenerangkan');

            $table->string('nikAyah')->nullable();
            $table->string('namaAyah')->nullable();
            $table->string('tanggalLahirAyah')->nullable();
            $table->string('pekerjaanAyah')->nullable();
            $table->string('alamatAyah')->nullable();

            $table->string('nikIbu')->nullable();
            $table->string('namaIbu')->nullable();
            $table->string('tanggalLahirIbu')->nullable();
            $table->string('pekerjaanIbu')->nullable();
            $table->string('alamatIbu')->nullable();


            $table->string('nikPelapor')->nullable();
            $table->string('namaPelapor')->nullable();
            $table->string('tanggalLahirPelapor')->nullable();
            $table->string('pekerjaanPelapor')->nullable();
            $table->string('alamatPelapor')->nullable();

            $table->bigInteger('saksi1')->unsigned()->nullable();
            $table->foreign('saksi1')->references('idPerangkat')->on('perangkat')->onUpdate('cascade');
            $table->bigInteger('saksi2')->unsigned()->nullable();
            $table->foreign('saksi2')->references('idPerangkat')->on('perangkat')->onUpdate('cascade');

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
        Schema::dropIfExists('kematian');
    }
}
