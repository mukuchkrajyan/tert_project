<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTertarticlesAddingColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tertarticles', function (Blueprint $table) {
            $table->string('img_local_url')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tertarticles', function (Blueprint $table) {
            $table->dropColumn('img_local_url');

        });
    }
}
