<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('en_tables', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('meals_id');
            $table->foreign('meals_id')->references('id')->on('meals');

            $table->unsignedInteger('drinks_id');
            $table->foreign('drinks_id')->references('id')->on('drinks');

            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');

            $table->unsignedInteger('ingredients_id');
            $table->foreign('ingredients_id')->references('id')->on('ingredients');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('en_tables');
    }
}
