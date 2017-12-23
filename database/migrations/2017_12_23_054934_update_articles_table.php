<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('tertarticles', function (Blueprint $table) {
            $table->string('cat_name')->after('id');
            $table->renameColumn('url', 'article_url');
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
            $table->dropColumn('cat_name');
            $table->renameColumn('article_url', 'url');

        });
    }
}
