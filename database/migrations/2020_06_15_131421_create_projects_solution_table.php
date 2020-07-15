<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsSolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_solution', function (Blueprint $table) {
           $table->unsignedBigInteger('project_id');
           $table->unsignedBigInteger('solution_id');
           $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
           $table->foreign('solution_id')->references('id')->on('solutions')->onDelete('cascade');
           $table->primary(['project_id','solution_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_solution');
    }
}
