<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //schema sama dengan table
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id'); //id, primary key, auto increment
            $table->string('nama_barang');
            $table->double('harga_barang');
            $table->double('stok_barang');
            $table->integer('id_kategori');
            $table->string('keterangan');
            $table->string('gambar');
            $table->timestamps(); //created_at, updated_at, type timestamp(sesuai dengan waktu yang diisikan)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
