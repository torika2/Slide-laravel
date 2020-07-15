<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUseCaseContainterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('use_case_container', function (Blueprint $table) {
            $table->id();
            $table->json('title')->nullable();
            $table->json('tab_name')->nullable();
            $table->json('text')->nullable();
            $table->json('link')->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('use_case_container');
    }
}
