<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_agama')->unsigned();
            $table->foreign('id_agama')->references('id')->on('agama')->onDelete('cascade');
            $table->integer('id_klasifikasi')->unsigned();
            $table->foreign('id_klasifikasi')->references('id')->on('klasifikasi')->onDelete('cascade');
            $table->integer('id_kk')->unsigned();
            $table->foreign('id_kk')->references('id')->on('kk')->onDelete('cascade');
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('gol_darah');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('status_perkawinan');
            $table->string('kewarganegaraan');

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
        Schema::dropIfExists('penduduks');
    }
}
