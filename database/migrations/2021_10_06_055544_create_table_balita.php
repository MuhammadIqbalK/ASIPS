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
            $table->id();
            $table->string('nama_balita',50);
            $table->integer('nik_ortu');
            $table->string('nama_ortu',50);
            $table->date('tgllahir_balita');
            $table->string('jk_balita',1);
            $table->smallInteger('status');
            $table->timestamps();

            // $table->integer('id_posyandu')->unsigned();
            // $table->foreign('id_posyandu')->references('id')->on('table_posyandu');
        });

        Schema::table('table_balita', function (Blueprint $table) {
            $table->foreignId('id_posyandu')->constrained('table_posyandu');
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
        Schema::dropIfExists('table_balita');
    }
}
