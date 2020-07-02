<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balasan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('konten',250);
            $table->bigInteger('balas_id')->unsigned();
            $table->foreign('balas_id')->references('id')->on('pertanyaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balasan');
    }
}
