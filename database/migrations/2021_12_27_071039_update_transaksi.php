<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('transaksi', function(Blueprint $table) {
            $table->dropForeign(['harga_sewa']);
            $table->dropForeign(['users_id']);
            $table->dropColumn('harga_sewa');
            $table->dropColumn('users_id');
            $table->unsignedBigInteger('pengirim')->after('id_transaksi');
            $table->foreign('pengirim')->references('id')->on('users');
            $table->unsignedBigInteger('penerima')->after('pengirim');
            $table->foreign('penerima')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
