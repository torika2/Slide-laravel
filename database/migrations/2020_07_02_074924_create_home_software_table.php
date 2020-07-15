<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSoftwareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_software', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->json('title')->nullable();
            $table->json('text')->nullable();
            $table->json('button1')->nullable();
            $table->json('link1')->nullable();
            $table->json('button2')->nullable();
            $table->json('link2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_software');
    }
}
