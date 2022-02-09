<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailtransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detailtrans', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang') -> nullable();
            $table->integer('id_transaksi') -> nullable();
            $table->string('jenis_transaksi');
            $table->string('is_confirm');
            $table->integer('qty_barang');
            $table->integer('harga_barang');
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
        Schema::dropIfExists('detailtrans');
    }
}
