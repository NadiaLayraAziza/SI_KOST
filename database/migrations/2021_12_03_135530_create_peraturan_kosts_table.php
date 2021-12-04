<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeraturanKostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peraturan_kosts', function (Blueprint $table) {
            $table->bigIncrements('id_peraturan');
            $table->unsignedBigInteger('id_penyedia');
            $table->foreign('id_penyedia')->references('id')->on('penyedia');
            $table->string('peraturan');
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
        Schema::dropIfExists('peraturan_kosts');
    }
}
