<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->decimal('price')->default(0)->nullable();
            $table->decimal('sale_price')->nullable();
            $table->integer('stock')->default(1);
            $table->json('title')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->json('short_text')->nullable();
            $table->json('text')->nullable();
            $table->json('description')->nullable();
            $table->json('details')->nullable();
            $table->json('slug')->nullable();
            $table->string('cover')->nullable();
            $table->integer('ord')->default(0);
            $table->timestamps();
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('image');
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');
            $table->integer('ord')->default(0);

        });

        Schema::create('product_included', function (Blueprint $table) {
            $table->id();
            $table->json('name')->nullable();
            $table->json('text')->nullable();
            $table->json('button')->nullable();
            $table->json('link')->nullable();
            $table->integer('ord')->default(0);
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_included');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('products');
    }
}
