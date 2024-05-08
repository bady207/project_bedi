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
        Schema::create('prodaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_prodak');
            $table->integer('jumlah');
            $table->unsignedBigInteger('merek_id');
            $table->timestamps();
            $table->foreign('merek_id')->references('id')->on('mereks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodaks');
    }
};
