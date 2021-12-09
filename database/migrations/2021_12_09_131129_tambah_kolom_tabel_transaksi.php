<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomTabelTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi', function(Blueprint $table){
            $table->unsignedBigInteger('nama_kost')->nullable();
            $table->foreign('nama_kost')->references('id_penyedia')->on('penyedia');
            $table->unsignedBigInteger('harga_sewa')->nullable();
            $table->foreign('harga_sewa')->references('id_penyewa')->on('penyewa');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksi', function(Blueprint $table){
            $table->dropColumn('username');
            $table->dropColumn('jumlah_transaksi');
        });  
    }
}
