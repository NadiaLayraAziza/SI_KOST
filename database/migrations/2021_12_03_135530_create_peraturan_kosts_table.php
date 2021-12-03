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
            $table->string('id_peraturan', 20)->primary();
            $table->foreign('id_penyedia', 20)->references('id')->on('penyedia');
            $table->string('peraturan', 5000);
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
