<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->integer('id_users') -> nullable();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->integer('no_hp');
            $table->string('negara');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('keterangan');
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
        Schema::dropIfExists('pengiriman');
    }
}
