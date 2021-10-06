<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKelurahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('kelurahan');
            $table->timestamps();
        });

            Schema::table('table_kelurahan', function (Blueprint $table) {
                $table->foreignId('id_kecamatan')->constrained('table_kecamatan');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kelurahan');
    }
}
