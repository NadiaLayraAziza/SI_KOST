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
            $table->foreign('id_penyedia')->references('nama_kost')->on('penyedia');
            $table->date('tanggal_transaksi')->nullable();
            $table->unsignedBigInteger('jumlah_transaksi')->nullable();
            $table->foreign('id_penyewa')->references('harga_sewa')->on('penyewa');
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
            $table->dropColumn('tanggal_transaksi');
            $table->dropColumn('jumlah_transaksi');
        });  
    }
}
