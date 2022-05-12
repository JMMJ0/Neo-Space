<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruta_planeta', function (Blueprint $table) {
            $table->unsignedBigInteger('id_ruta');
            $table->unsignedBigInteger('id_planeta');
        });
        Schema::table('ruta_planeta', function (Blueprint $table) {
            $table->foreign('id_ruta')->references('id')->on('ruta')->onDelete('cascade');
            $table->foreign('id_planeta')->references('id')->on('planeta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ruta_planeta');
    }
};
