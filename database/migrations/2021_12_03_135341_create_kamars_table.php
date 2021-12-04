<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->bigIncrements('id_kamar');
            $table->string('tipe_kamar');
            $table->string('fasilitas');
            $table->integer('Harga_Tahunan');
            $table->integer('Harga_bulanan');
            $table->integer('Harga_mingguan');
            $table->integer('Harga_harian');
            $table->string('Foto_Kamar')->nullable();
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
        Schema::dropIfExists('kamars');
    }
}
