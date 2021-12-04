<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahForeignKeyPeraturanKost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('peraturan_kosts', function(Blueprint $table) {
            $table->unsignedBigInteger('id_penyedia');
            $table->foreign('id_penyedia')->references('id_penyedia')->on('penyedia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('peraturan_kosts', function(Blueprint $table){
            $table->dropColumn('id_penyedia');
            $table->dropForeign('id_penyedia');
        }); 
    }
}
