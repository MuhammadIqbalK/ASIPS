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
            $table->integer('id_posyandu');
            $table->string('nama_posyandu',20);
            $table->string('alamat_posyandu',50);
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
        Schema::dropIfExists('table_posyandu');
    }
}
