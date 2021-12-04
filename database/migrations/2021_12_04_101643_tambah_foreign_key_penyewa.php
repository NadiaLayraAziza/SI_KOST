<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahForeignKeyPenyewa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('penyewa', function(Blueprint $table) {
            $table->unsignedBigInteger('kost');
            $table->foreign('kost')->references('id_penyedia')->on('penyedia');
            $table->unsignedBigInteger('id_kmr');
            $table->foreign('id_kmr')->references('id_kamar')->on('kamars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('penyewa', function(Blueprint $table){
            $table->dropColumn('kost');
            $table->dropForeign('kost');
            $table->dropColumn('id_kmr');
            $table->dropForeign('id_kmr');
        }); 
    }
}
