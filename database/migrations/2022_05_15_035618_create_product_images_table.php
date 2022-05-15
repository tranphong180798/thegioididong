<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable(false);
            $table->integer('color_id');
            $table->string('image_path');
            $table->integer('index');
            $table->tinyInteger('type');
            $table->timestamps();

            //$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            //$table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
}
