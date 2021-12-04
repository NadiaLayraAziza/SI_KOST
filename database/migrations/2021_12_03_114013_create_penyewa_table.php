<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewa', function (Blueprint $table) {
            $table->bigIncrements('id_penyewa');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('telp_ortu');
            $table->unsignedBigInteger('kost');
            $table->foreign('kost')->references('id')->on('penyedia');
            $table->unsignedBigInteger('id_kmr');
            $table->foreign('id_kmr')->references('id_kamar')->on('kamars');
            $table->string('jangka_waktu');
            $table->integer('jumlah_waktu');
            $table->date('tgl_mulai');
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
        Schema::dropIfExists('penyewa');
    }
}
