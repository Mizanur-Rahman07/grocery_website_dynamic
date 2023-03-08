<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_offers', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->integer('type_id');
            $table->text('image');
            $table->text('sub_image');
            $table->text('slug');
            $table->string('discount');
            $table->integer('product_price');
            $table->integer('category_id');
            $table->string('brand');
            $table->text('description');
            $table->string('available_size');
            $table->string('product_sku');
            $table->string('product_tags');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('product_offers');
    }
};