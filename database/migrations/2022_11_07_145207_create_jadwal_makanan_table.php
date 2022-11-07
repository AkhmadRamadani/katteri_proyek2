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
        Schema::create('jadwal_makanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hari_id');
            $table->unsignedBigInteger('paket_id');
            $table->unsignedBigInteger('menu_id');
            $table->timestamps();
            $table->foreign('hari_id')->references('id')->on('hari')->onDelete('cascade');
            $table->foreign('paket_id')->references('id')->on('paket')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_makanan');
    }
};
