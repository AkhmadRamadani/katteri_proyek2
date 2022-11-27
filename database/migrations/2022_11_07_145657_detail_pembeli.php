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
        Schema::create('detail_pembeli', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscribe_id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_telp_1');
            $table->string('no_telp_2');
            $table->string('kode_pos');
            $table->timestamps();
            $table->foreign('subscribe_id')->references('id')->on('subscribe')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pembeli');
    }
};
