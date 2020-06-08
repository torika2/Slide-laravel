<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function($table) {
            $table->enum('protected', ['true', 'false'])->default('false');
            $table->enum('has_backend_access', ['true', 'false'])->default('false');
            $table->enum('for_registration', ['true', 'false'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function($table) {
            $table->dropColumn('protected');
            $table->dropColumn('has_backend_access');
            $table->dropColumn('for_registration');
        });
    }
}
