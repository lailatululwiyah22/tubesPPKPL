<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ManasikMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manasik', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_manasik');
            $table->string('nama_manasik');
            $table->string('id_muthowwif');
            $table->date('tanggal');
            $table->string('tempat');
            $table->time('waktu');
            $table->timestamps();
            $table->primary('id_manasik');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('manasik');
    }
}
