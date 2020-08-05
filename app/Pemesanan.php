<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table      = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable   = ['jml_pesan', 'id_paket', 'id_pengguna','no_telp','status','harga'];



    public function paket(){
        return $this->belongsTo('App\paket', 'id_paket');
    }
     public function Pengguna(){
        return $this->belongsTo('App\Pengguna', 'id_pengguna');
    }
}
