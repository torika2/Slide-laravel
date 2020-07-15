<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwarePricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pricing_params', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->integer('ord')->default(0);
        });
        Schema::create('software_pricing', function (Blueprint $table) {
            $table->id();
            $table->integer('popular')->default(0);
            $table->json('title')->nullable();
            $table->string('m_price')->nullable()->default(0);
            $table->string('y_price')->nullable()->default(0);
            $table->json('link')->nullable();
            $table->json('params')->nullable();
            $table->integer('ord')->default(0);
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
        Schema::dropIfExists('software_pricing');
        Schema::dropIfExists('pricing_params');
    }
}
