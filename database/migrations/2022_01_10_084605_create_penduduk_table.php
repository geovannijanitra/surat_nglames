<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->bigInteger('nik')->unique()->unique();;
            $table->bigInteger('no_kk')->unsigned();
            $table->foreign('no_kk')->references('noKk')->on('kk')->onUpdate('cascade');
            $table->string('nama');
            $table->string('tempatLahir');
            $table->date('tanggalLahir');
            $table->string('kelamin');
            $table->string('agama');
            $table->string('status');
            $table->string('statushubungan');
            $table->string('pekerjaan');
            $table->string('kewarganegaraan');
            $table->string('pendidikan');
            $table->string('namaAyah');
            $table->string('namaIbu');
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
        Schema::dropIfExists('penduduk');
    }
}
