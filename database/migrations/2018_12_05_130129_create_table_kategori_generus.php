<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKategoriGenerus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_generus', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nama');
            $table->boolean('tipe')->default(0)->comment('pengelompokkan data');
            $table->tinyInteger('usia_awal')->comment('usia dalam tahun');
            $table->tinyInteger('usia_akhir')->comment('usia dalam tahun');
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
        Schema::dropIfExists('kategori_generus');
    }
}
