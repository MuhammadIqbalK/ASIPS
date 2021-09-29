<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBalita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_balita', function (Blueprint $table) {
            $table->integer('id_balita');
            $table->string('nama_balita',50);
            $table->string('nik_orangtua',50);
            $table->date('tgl_lahir_balita');
            $table->char('jk_balita',1);
            $table->integer('status');
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
        Schema::dropIfExists('table_balita');
    }
}
