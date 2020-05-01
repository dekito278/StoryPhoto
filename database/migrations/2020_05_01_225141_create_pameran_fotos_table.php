<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePameranFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pameran_fotos', function (Blueprint $table) {
            $table->bigIncrements('no');
            $table->integer('no_pameran')->unsigned();
            $table->string('tempat_foto');
            $table->string('deksripsi_foto')->nullable();
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
        Schema::dropIfExists('pameran_fotos');
    }
}
