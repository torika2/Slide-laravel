<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uc_solutions', function (Blueprint $table) {
            $table->unsignedBigInteger('use_cases_id');
            $table->unsignedBigInteger('solutions_id');
            $table->foreign('use_cases_id')->references('id')->on('use_cases')->onDelete('cascade');
            $table->foreign('solutions_id')->references('id')->on('solutions')->onDelete('cascade');
            $table->primary(['use_cases_id','solutions_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uc_solutions');
    }
}
