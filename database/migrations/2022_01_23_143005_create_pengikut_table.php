<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengikutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengikut', function (Blueprint $table) {
            $table->bigInteger('idPengikut')->unique()->autoIncrement();
            $table->bigInteger('surat_id')->unsigned();
            $table->foreign('surat_id')->references('idSurat')->on('surat')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nomer');
            $table->string('nama');
            $table->string('kelamin');
            $table->string('umurpengikut');
            $table->string('status');
            $table->string('pendidikan');
            $table->string('nikpengikut');
            $table->string('ket');
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
        Schema::dropIfExists('pengikut');
    }
}
