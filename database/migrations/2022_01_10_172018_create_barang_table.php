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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_admin') -> nullable();
            $table->integer('code_barang');
            $table->string('nama_barang');
            $table->decimal('harga_barang');
            $table->string('ukuran_barang');
            $table->integer('qty_awal');
            $table->integer('qty');
            $table->string('deskripsi_barang');
            $table->string('gambar_barang');
            $table->string('created_by');
            $table->string('update_by');
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
        Schema::dropIfExists('barang');
    }
}
