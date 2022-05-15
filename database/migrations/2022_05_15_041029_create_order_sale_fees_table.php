<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSaleFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_sale_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->nullable(false);
            $table->string('sale_fee_code')->nullable(false);
            $table->integer('value');
            $table->timestamps();

            //$table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_sale_fees');
    }
}
