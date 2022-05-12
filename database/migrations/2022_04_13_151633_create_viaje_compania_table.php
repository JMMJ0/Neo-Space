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
        Schema::create('viaje_compania', function (Blueprint $table) {
            $table->unsignedBigInteger('id_viaje');
            $table->unsignedBigInteger('id_compania');
        });
        Schema::table('viaje_compania', function (Blueprint $table) {
            $table->foreign('id_viaje')->references('id')->on('viaje')->onDelete('cascade');
            $table->foreign('id_compania')->references('id')->on('compania')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaje_compania');
    }
};
