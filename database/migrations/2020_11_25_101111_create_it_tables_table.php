<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_tables', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('farinas_id');
            $table->foreign('farinas_id')->references('id')->on('farinas')->onDelete('cascade');

            $table->unsignedInteger('bevandas_id');
            $table->foreign('bevandas_id')->references('id')->on('bevandas')->onDelete('cascade');

            $table->unsignedInteger('categos_id');
            $table->foreign('categos_id')->references('id')->on('categos')->onDelete('cascade');

            $table->unsignedInteger('ingredis_id');
            $table->foreign('ingredis_id')->references('id')->on('ingredis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('it_tables');
    }
}
