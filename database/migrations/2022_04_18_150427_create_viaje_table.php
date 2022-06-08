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
        Schema::create('viaje', function (Blueprint $table) {
            $table->id();
            $table->time('hora', $precision = 4);
            $table->string('punto_salida');
            $table->unsignedBigInteger('punto_destino');
            $table->date('fecha');
            $table->unsignedBigInteger('compania');
            
        });

        Schema::table('viaje', function (Blueprint $table) {
            $table->foreign('punto_destino')->references('id')->on('planeta')->onDelete('cascade');
        });
        Schema::table('viaje', function (Blueprint $table) {
            $table->foreign('compania')->references('id')->on('compania')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viaje');
    }
};
