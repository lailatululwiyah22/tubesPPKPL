<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransaksiMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
        $table->increments('id_transaksi');
        $table->String('file');
            $table->integer('id_pemesanan')->unsigned();
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanan');
            $table->integer('id_paket')->unsigned();
            $table->foreign('id_paket')->references('id_paket')->on('paket');  
            $table->integer('id_pengguna')->unsigned();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna');
            

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
        Schema::dropIfExists('transaksi');
    }
}
