<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->bigInteger('idKelahiran')->unique()->unsigned()->autoIncrement();
            $table->bigInteger('tandatangan')->unsigned()->nullable();
            $table->foreign('tandatangan')->references('idPerangkat')->on('perangkat')->onUpdate('cascade');
            $table->bigInteger('nik')->unsigned();
            $table->foreign('nik')->references('nik')->on('penduduk')->onUpdate('cascade');

            $table->string('tanggalSurat');
            $table->string('noSurat');
            $table->string('jenisSurat');

            $table->string('namaAnak')->nullable();
            $table->string('kelaminAnak')->nullable();
            $table->string('tempatDilahirkan')->nullable();
            $table->string('tempatKelahiran')->nullable();
            $table->string('hariLahirAnak')->nullable();
            $table->string('tanggalLahirAnak')->nullable();
            $table->string('pukulKelahiran')->nullable();
            $table->string('jenisKelahiran')->nullable();
            $table->string('kelahiranKe')->nullable();
            $table->string('penolongKelahiran')->nullable();
            $table->string('beratBayi')->nullable();
            $table->string('panjangBayi')->nullable();

            $table->bigInteger('ibu')->unsigned()->nullable();
            $table->foreign('ibu')->references('nik')->on('penduduk')->onUpdate('cascade');
            $table->bigInteger('ayah')->unsigned()->nullable();
            $table->foreign('ayah')->references('nik')->on('penduduk')->onUpdate('cascade');

            $table->string('nikPelapor')->nullable();
            $table->string('namaPelapor')->nullable();
            $table->string('tanggalLahirPelapor')->nullable();
            $table->string('umurPelapor')->nullable();
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
        Schema::dropIfExists('kelahiran');
    }
}
