<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('no_order');
            $table->integer('total');
            $table->string('alamat');
            $table->string('provinsi');
            $table->integer('ongkir');
            $table->String('phone_number')->nullable();
            $table->String('token')->nullable();
            $table->String('payment_type')->nullable();
            $table->String('transaction_status')->nullable();
            $table->String('settlement_time')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
