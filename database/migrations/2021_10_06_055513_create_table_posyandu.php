<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePosyandu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_posyandu', function (Blueprint $table) {
            $table->id();
            $table->string('nama_posyandu',20);
            $table->string('alamat_posyandu',50);
            $table->timestamps();

            // $table->integer('id_kelurahan')->unsigned();
            // $table->foregin('id_kelurahan')->references('id')->on('table_kelurahan');
        });
        Schema::table('table_posyandu', function (Blueprint $table) {
            $table->foreignId('id_kelurahan')->constrained('table_kelurahan');
            // $table->foreignId('id_pengurus')->constrained('pengurus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_posyandu');
    }
}
