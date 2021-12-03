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
            $table->string('id_kamar', 20)->primary();
            $table->foreign('id_penyedia', 20)->references('id')->on('penyedia');
            $table->string('tipe_kamar', 50);
            $table->string('fasilitas', 50);
            $table->integer('Harga_Tahunan');
            $table->integer('Harga_bulanan');
            $table->integer('Harga_mingguan');
            $table->integer('Harga_harian');
            $table->string('Foto_Kamar',50)->nullable();
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
