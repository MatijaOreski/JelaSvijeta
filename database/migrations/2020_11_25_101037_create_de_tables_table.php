<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_tables', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('mahlzeits_id');
            $table->foreign('mahlzeits_id')->references('id')->on('mahlzeits')->onDelete('cascade');

            $table->unsignedInteger('trinkens_id');
            $table->foreign('trinkens_id')->references('id')->on('trinkens')->onDelete('cascade');

            $table->unsignedInteger('kategoris_id');
            $table->foreign('kategoris_id')->references('id')->on('kategoris')->onDelete('cascade');

            $table->unsignedInteger('zutats_id');
            $table->foreign('zutats_id')->references('id')->on('zutats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('de_tables');
    }
}
