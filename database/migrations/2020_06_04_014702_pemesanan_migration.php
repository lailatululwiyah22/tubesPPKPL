<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PemesananMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('id_pemesanan');
            $table->integer('jml_pesan');
            $table->integer('id_paket')->unsigned();
            $table->foreign('id_paket')->references('id_paket')->on('paket');
            $table->integer('id_pengguna')->unsigned();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna');
            $table->integer('no_telp');
            $table->String('status');

            
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
        Schema::dropIfExists('pemesanan');
    }
}
