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
        Schema::create('compania_cohete', function (Blueprint $table) {
            $table->unsignedBigInteger('id_compania');
            $table->unsignedBigInteger('id_cohete');
            
        });

        Schema::table('compania_cohete', function (Blueprint $table) {
            $table->foreign('id_compania')->references('id')->on('compania')->onDelete('cascade');
            $table->foreign('id_cohete')->references('id')->on('cohete')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compania_cohete');
    }
};
