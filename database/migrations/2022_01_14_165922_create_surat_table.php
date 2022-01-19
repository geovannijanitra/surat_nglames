<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->bigInteger('idSurat')->unique()->autoIncrement();
            $table->bigInteger('nik')->unsigned();
            $table->foreign('nik')->references('nik')->on('penduduk')->onUpdate('cascade');
            $table->bigInteger('tandatangan')->unsigned()->nullable();
            $table->foreign('tandatangan')->references('idPerangkat')->on('perangkat')->onUpdate('cascade');
            $table->string('noSurat');
            $table->string('jenisSurat');
            $table->string('keperluan')->nullable();
            $table->string('tanggalSurat')->nullable();
            $table->string('umurPenduduk')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
