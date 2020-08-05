<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table="paket";
	protected $primaryKey="id_paket";
	protected $fillable=['id_paket','name','durasi','harga','jenis_paket','fasilitas','file'];
}
